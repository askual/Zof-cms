<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Helpers\MiscHelper;
class MiscController extends Controller
{
    //1/ASTU%20Logo.jpg
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

    public function chache_del(){
        MiscHelper::remove_cache();
        return redirect()->back();
    }
}
