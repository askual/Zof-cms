<?php

namespace Modules\Enquiry\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Enquiry\Entities\Enquiry;
use App\Option;
class AdminController extends Controller
{
    private $theme = "";
    public function __construct(){
		$this->middleware('isAdmin');
		$this->theme = Option::where('name','theme_current')->first()->value;
    }
    public function index(){
        return view('enquiry::admin.index',[
            'enquiries_categories' => Enquiry::all()->pluck('from'),
            'enquiries' => Enquiry::all()->groupBy('from'),
        ]);
    }

    public function all(){
        return view('enquiry::create');
    }
    
}
