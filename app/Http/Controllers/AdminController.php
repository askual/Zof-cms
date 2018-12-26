<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

use App\Enquiry;
use App\Post;
use App\Page;
use App\Option;
use App\Media;
use App\PageType;
// use Nwidart\Modules\Module;
use Illuminate\Support\Facades\Storage;

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
    public function index(){
    	return view('admin.index');
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
