<?php

namespace Modules\Zof\Helpers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Enquiry\Entities\Enquiry;
use Modules\Zof\Entities\Option;

class MiscHelper
{
    public static function remove_cache(){
        $folder = storage_path('framework/views');
        // $folder = 'temporary_files';
        //Get a list of all of the file names in the folder.
        $files = glob($folder . '/*');
        
        //Loop through the file list.
        foreach($files as $file) {
            //Make sure that this is a file and not a directory.
            if(is_file($file)){
                //Use the unlink function to delete the file.
                unlink($file);
            }
        }   
    }





    // Function to remove folders and files 
    public static function rrmdir($dir) {
        if (is_dir($dir)) {
            $files = scandir($dir);
            foreach ($files as $file)
                if ($file != "." && $file != "..") rrmdir("$dir/$file");
            rmdir($dir);
        }
        else if (file_exists($dir)) unlink($dir);
    }

    // Function to Copy folders and files       
    public static function rcopy($src, $dst) {
        if (file_exists ( $dst )){
            $t = new MiscHelper(); 
            $t::rrmdir ( $dst );
        }
        if (is_dir ( $src )) {
            mkdir ( $dst );
            $files = scandir ( $src );
            foreach ( $files as $file )
                if ($file != "." && $file != ".."){
                    $t = new MiscHelper();
                    $t::rcopy ( "$src/$file", "$dst/$file" );
                }
        } else if (file_exists ( $src ))
            copy ( $src, $dst );
    }
}
