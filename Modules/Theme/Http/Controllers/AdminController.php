<?php

namespace Modules\Theme\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Zof\Entities\Option;
use App\Helpers\MiscHelper;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Analytics;
use Spatie\Analytics\Period;
class AdminController extends Controller
{
    private $theme = "";
    public function __construct(){
		$this->middleware('isAdmin');
		$this->theme = Option::where('name','theme_current')->first()->value;
	}
	public function analytics(){
		return Analytics::fetchMostVisitedPages(Period::days(30));
	}
	public function theme_install($theme){
		$migrations = DB::table('zof-options')->get();
		// $theme = DB::table('options')->where('name','theme_current')->get()[0]->value;
		// $in  =  'resources/views/themes/'.$theme.'/config/theme.json';
		$json_path = base_path('Themes/'.$this->theme.'/config/theme.json');
		$handle = file_get_contents($json_path, "r");
		$zjson = json_decode($handle);
		foreach ($zjson->options as $option) {
			$row_name = "themes_".$this->theme."_".$option->name;
			$exists = sizeof(DB::table('zof-options')->where('name',$row_name)->get());
			if($exists==0){
				DB::table('zof-options')->insert(
					['name' => $row_name, 'value' => $option->value]
				);
				echo($row_name." inserted");
			}
		}
	}
    public function setting(){
		$themeSettings = [];
		$d = dir(base_path('Themes'));
		while (false !== ($entry = $d->read())) {
			if($entry!="." && $entry!=".."){
				$folder = $entry;
				$json_path = base_path('Themes/'.$folder.'/config/theme.json');
				$handle = file_get_contents($json_path, "r");
				$zjson = json_decode($handle);
				if($this->theme==$entry){
					$zjson->active = true;
				}else{
					$zjson->active = false;
				}
				$themeSettings[$entry] = $zjson;
			}
		}
		$d->close();

		$themeOptions = $themeSettings[$this->theme]->options;
		foreach ($themeOptions as $key => $value) {
			$value->value = Option::where('name','themes_'.$this->theme.'_'.$value->name)->first()->value;
		}
		$optionResults = Option::Where('name', 'like', '%' . 'themes_'.$this->theme . '%')->get();
		foreach ($optionResults as $value) {
			// $value->name = "ss";
			$xyz = strlen('themes_'.$this->theme);
			$value->name = substr($value->name,$xyz+1);
		}
		// $optionResults->
		// return $optionResults;
		$sth = [
			'site_name' => Option::where('name','site_name')->first()->value,
			'site_description' => Option::where('name','site_description')->first()->value,
			// 'theme_current'=> $theme_current,
			'themeSettings' => $themeSettings,
			'themeOptions' => $themeOptions,
			'optionResults' => $optionResults
		];
		return view('theme::admin.setting',$sth);

	}
	public function setting_edit(Request $request){
		if(isset($request['site_name'])){
			$o1 = Option::where('name','site_name')->first();
			$o1->value  = $request['site_name'];
			$o1->save();
		}
		if(isset($request['site_description'])){
			$o2 = Option::where('name','site_description')->first();
			$o2->value  = $request['site_description']." ";
			$o2->save();
		}
		if(isset($request['theme_current'])){
			$o2 = Option::where('name','theme_current')->first();
			$o2->value  = $request['theme_current'];
			$o2->save();
			$this->theme_install($request['theme_current']);
		}
		return redirect()->back();
	}
	public function setting_theme_edit(Request $request){
		foreach (Collect($request->all())->except('_token') as $name=>$value) {
			// echo $single_request."<br>";
			$o1 = Option::where('name','themes_'.$this->theme."_".$name)->first();
			$o1->value  = $value;
			$o1->save();
		}
        MiscHelper::remove_cache();
		return redirect()->back();
		return $request->all();
		return $request->all();
    }
    
    public function pages(){
		$widgets_path = base_path('Themes/'.$this->theme.'/config/widgets.php');
		include_once $widgets_path;
		return view('theme::admin.pages',['pages'=>Page::all(),'widgets'=>$widgets,'page_types'=> PageType::all()]);
    }
    
	public function page_edit(Request $request){
		// return json_decode("[".$request['body']."]");
		// return strlen($request['body']);
		$p = Page::find($request['id']);
		if($request['body']==""){
			$p->body = [];
		}else{
			$p->body = json_decode("[".$request['body']."]");
		}
		$p->save();
		return redirect()->back();
	}
}
