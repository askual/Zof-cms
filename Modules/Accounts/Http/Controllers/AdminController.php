<?php

namespace Modules\Accounts\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Accounts\Entities\User;
use Auth;
class AdminController extends Controller
{
    public function __construct(){
		$this->middleware('isAdmin');
    }

    public function all(){
        return view('accounts::admin.all',[
            'users' => User::all()->diff([Auth::user()])
        ]);
    }


}
