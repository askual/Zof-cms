<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class ShellController extends Controller
{
    public function kdrop(){
        $migrations = DB::table('options')->get();
        $theme = DB::table('options')->where('name','theme_current')->get()[0]->value;
        // $in  =  'resources/views/themes/'.$theme.'/config/theme.json';
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
}
