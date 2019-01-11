<?php

namespace Modules\Enquiry\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Enquiry\Entities\Enquiry;
use Modules\Zof\Entities\Option;
class EnquiryController extends Controller
{
    private $theme = "";
    public function __construct(){
		$this->theme = Option::where('name','theme_current')->first()->value;
    }
    public function show_page($name){
        return view($this->theme.'.pages.inquiry.'.$name);
    }
    public function user_submit(Request $request){
        $input = Collect($request->all())->except(['_token','from'])->toArray();
        Enquiry::create(['from'=>$request['from'],'body'=>$input]);
        return redirect('/');
    }
}
