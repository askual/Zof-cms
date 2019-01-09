<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;	
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Hash;

use App\Enquiry;
use App\Post;
use App\Page;
use App\Option;
use App\Media;
use App\PageType;

use App\Helpers\ModuleHelper;
use App\Helpers\MiscHelper;

use Illuminate\Support\Facades\Storage;
use Illuminate\Filesystem\Filesystem;
class AdminController extends Controller
{
    private $theme = "";
    public function __construct(){
		$this->middleware('isAdmin');
		$this->theme = Option::where('name','theme_current')->first()->value;
	}
	public function module_status_toggle($module){
		$module2 = $module;
		$module = \Module::findOrFail($module2);
        if ($module->disabled()) {
            $module->enable();
        } else {
            $module->disable();
        }
		return redirect()->back();
	}
	public function module_update($module){
		$m = \Module::findOrFail($module);
		$v9 = ModuleHelper::new_version($m->alias);
		if($m->version>=$v9){
			return "error";
		}
		// Download the zip
		$contents = file_get_contents('http://127.0.0.1:1234/file/modules/'.$m->alias.$v9.'.zip');
		$f = Storage::put('temp/'.$m->alias.$v9.'.zip', $contents);
		// Uncompress
		$zip = new \ZipArchive;
		$res = $zip->open( base_path('storage/app/temp/'.$m->alias.$v9.'.zip'));
		if ($res === TRUE) {
			$zip->extractTo(base_path('storage/app/temp'));
			$zip->close();
			// echo 'woot!';
		} else {
			// echo 'doh!';
		}
		// Move the local to the /Old
		MiscHelper::rcopy('../Modules/'.$module, '../Old/'.$module);
		$file = new Filesystem;
		$file->cleanDirectory(base_path('Modules/'.$module));
		// Storage::move(base_path('Old/'.$module), base_path('Modules/'.$module));
		// MiscHelper::rcopy( base_path('Old/'.$module), base_path('Modules/'.$module) );
		// Move the new to the /Modules
		MiscHelper::rcopy( base_path('storage/app/temp/'.$module), base_path('Modules/'.$module) );
		// Migrate
		\Artisan::call('module:migrate',[
			'module' => $module
		]);
		return redirect()->back();
		exit();
		// Seed
		\Artisan::call('module:make-seed',[
			'module' => $module
		]);
		exit();
		// unzip -> remove_local -> move new -> migrate -> seed
	}
    public function index(){
		// $v =  ModuleHelper::version('dd');
		$modules = \Module::all();
		foreach($modules as $m){
			$m->version9 = ModuleHelper::new_version($m->alias);
		}
    	return view('admin.index',[
			'modules' => $modules
		]);
	}
	public function page_create(Request $request){
		$slug = str_replace(" ","-",strtolower($request['title']));
		Page::create(['title'=>$request['title'], 'slug'=>$slug, 'body'=>[],'page_type_id'=>$request['page_type']]);
		return redirect()->back();
	}
	public function media(){
		// return dd(today());
		$media = Media::all();
		// $media = Media::paginate(5);	
		// $media = Media::all()->sortByDesc('id')->paginate(5);	
		// return view('admin.media',['media'=>$media]);
		return view('admin.media',['media'=>$media->sortByDesc('id')->chunk(4)]);
	}
	public function media_upload(Request $request){
		$name = $request->zfile->getClientOriginalName();
		$extension = $request->zfile->getClientOriginalExtension();
		$ttt = date('Y/m/d');
		$path = $request->file('zfile')->store('public/'.$ttt);
		$url = substr(Storage::url($path),9);
		Media::create(['title'=>$name,'name'=>$url,'type'=>$this->datatype($extension)]);
		return redirect()->back();
	}
	protected function datatype($t){
		if ($t=="jpg" || $t=="jpeg" || $t=="png" || $t=="gif") {
			return 'image';
		}
		if ($t =="pdf") {
			return "file";
		}
		if ($t =="mp4") {
			return "video";
		}
	}
    public function enquiry(){
    	return view('admin.enquiry',[
    		'enquiries' => Enquiry::all()
    	]);
	}
	
	

	
    
        
}
