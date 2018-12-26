<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Enquiry;
use App\Post;
use App\Page;
use App\Option;
class PageController extends Controller{
    private $theme = "";
    public function __construct(){
        $this->theme = Option::where('name','theme_current')->first()->value; 
    }
    public function index(){
    	return view( $this->theme.'.index');
    }


    public function join(){
		return view( $this->theme.'.join');
    }

    public function inquiry($name){
        return view($this->theme.'.pages.inquiry.'.$name);
    }
    public function enquiry_submit(Request $request){
        $input = Collect($request->all())->except(['_token','from'])->toArray();
        Enquiry::create(['from'=>$request['from'],'body'=>$input]);
        return redirect('/');
    }

    public function all($slug){
        $p = Page::where('slug',$slug)->firstOrfail();
		$widgets_path = base_path('Themes/'.$this->theme.'/config/widgets.php');
        include_once $widgets_path;
        $type = $p->page_type->name;
        // return $p->page_type->template;
        if ($type!="custom") {
            $widgets_path = base_path('Themes/'.$this->theme.'/pages/variables.php');
            include_once $widgets_path;
            return view($this->theme.'.pages.'.$p->page_type->template,$the_array[$p->page_type->template]);
        }
        return View::first([ $this->theme.'.page', $this->theme.'.all'], ['page'=>$p,'widgets'=>$widgets]);
    }
    

    // public function contact_submit(Request $request){
    //     Enquiry::create([
    //         'name' => $request['name'],
    //         'body' => $request['body'],
    //         'address' => $request['address'],
    //     ]);
    //     return redirect()->back();
    // }
    // public function blog_image($name){
    //     $contents = storage_path('blog/'.$name);
    //     if(Storage::exists('blog/'.$name))
    //         return response()->file(storage_path().'/app/blog/'.$name);
    //     else
    //         return response()->file(public_path().'/avatars/student'.$s.'.jpg');    
    // }
}



