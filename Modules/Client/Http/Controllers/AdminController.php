<?php

namespace Modules\Client\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Client\Entities\User as Client;
use Modules\AlenSys\Helpers\CypherHelper;
use Carbon\Carbon;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function __construct(){
		$this->middleware('isAdmin');
    }
    public function add_client(){
        return view('client::admin.add_client',[
            'clients' => Client::all()
        ]);
    }
    public function add_client_post(Request $request){
        Client::create([
            'name' => $request['name'],
            'username' => $request['username'],
            'password' => Hash::make('secret')
        ]);
        return redirect()->back();
    }
    // public function 
}
