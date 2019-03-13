<?php

namespace Modules\Client\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Client\Entities\Service;

use Auth;
class ClientController extends Controller
{
    public function __construct(){
        $this->middleware(['auth:clients']);
    }
    public function index(){
        // return "ddd";
        // return Auth::user()->services;
        return view('client::client.index');
    }
    public function clientLoginPost(Request $request){

    }
}
