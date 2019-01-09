<?php

namespace Modules\Media\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;

class AdminController extends Controller
{
    // http://127.0.0.1:8000/admin/filemanager?type=image
    public function image_page(){
        return view('media::admin.image');
    }
    public function file_page(){
        return view('media::admin.file');
    }
}
