<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
class MiscController extends Controller
{
    //
    public function storage($name){
        $name = 'public/'.$name;
        $exists = Storage::exists($name);
        if($exists){
            // $contents = Storage::download($name);
            // $contents = Storage::get($name);
            return response()->file( storage_path('app/'.$name));
        }
        return "ss";
    }
}
