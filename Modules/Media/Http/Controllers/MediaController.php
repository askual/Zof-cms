<?php

namespace Modules\Media\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;

class MediaController extends Controller
{
    public function files($name){
        return response()->download(base_path('public/files/'.$name));
        // return response()->download(public_path('files/'.$name));
        // return response()->file( public_path('photos/'.$name));
    }
    public function storage($name){
        // $ar = explode('/',$name);
        return response()->file( base_path('public/photos/'.$name));
        // $name = 'public/photos/'.$name;
        // $exists = Storage::exists($name);
        // if($exists){
            // $contents = Storage::download($name);
            // $contents = Storage::get($name);
            // return response()->file( storage_path('app/'.$name));
        // }
        // return "ss";
    }
    


}
