<?php

namespace App\Helpers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Enquiry\Entities\Enquiry;
use App\Option;
class ModuleHelper
{
    public static function new_version($modulename){
        $json_path = app_path('zof-dev.json');
        $handle = file_get_contents($json_path, "r");
        $zjson = json_decode($handle);
        $ff = @file_get_contents($zjson->base_link.'/zof/module/'.$modulename);
        $obj = json_decode($ff);
        return $obj->version; 
    }
    
    // $in  =  app_path('zof.json');
    // $d = dir($in);
    // while (false !== ($entry = $d->read()) && $entry!="." && $entry!=".gitkeep"  ) {
    // 	$seedFile = substr($entry,0,strlen($entry)-4);
    // 	Artisan::call('db:seed', [
    //         '--class' => '\\Modules\\'.$module.'\\Database\\Seeders\\'.$seedFile
    //     ]);
    // }
    // $d->close();  
}