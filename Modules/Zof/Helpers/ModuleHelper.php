<?php

namespace Modules\Zof\Helpers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Enquiry\Entities\Enquiry;
use Modules\Zof\Entities\Option;
class ModuleHelper
{
    public static function new_version($modulename){
        $json_path = base_path('Modules/Zof/module.json');
        $handle = file_get_contents($json_path, "r");
        $zjson = json_decode($handle);
        $ff = @file_get_contents($zjson->base_link.'/module/'.$modulename);
        $obj = json_decode($ff);
        if(!isset($obj->version)){
            return "E-".$zjson->base_link.'/zof/module/'.$modulename;
        }
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
