<?php

namespace Modules\SharedHost\Http\Controllers;

use Modules\Zof\Helpers\MiscHelper;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Routing\Controller;

class SharedHostController extends Controller{

    public function migrate($module){
        \Artisan::call('module:migrate',[
			'module' => $module
		]);
    }
    
    public function kdrop(){
        $migrations = DB::table('options')->get();
        $theme = DB::table('options')->where('name','theme_current')->get()[0]->value;
        $json_path = base_path('Themes/'.$theme.'/config/theme.json');
        $handle = file_get_contents($json_path, "r");
        $zjson = json_decode($handle);
        foreach ($zjson->options as $option) {
            $row_name = "themes_".$theme."_".$option->name;
            $exists = sizeof(DB::table('options')->where('name',$row_name)->get());
            if($exists==0){
                DB::table('options')->insert(
                    ['name' => $row_name, 'value' => $option->value]
                );
                echo($row_name." inserted");
            }
        }
    }

    public function chache_del(){
        MiscHelper::remove_cache();
        return redirect()->back();
    }

}
