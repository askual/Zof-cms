<?php

namespace Modules\Theme\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use App\Option;
class ThemeController extends Controller
{
    private $theme = "";
    public function __construct(){
        $this->theme = Option::where('name','theme_current')->first()->value; 
    }
    public function static_page($slug){
        // return "ddd";
        // $p = Page::where('slug',$slug)->firstOrfail();
		// $widgets_path = base_path('Themes/'.$this->theme.'/config/widgets.php');
        // include_once $widgets_path;
        // $type = $p->page_type->name;
        // return $p->page_type->template;
        // if ($type!="custom") {
        //     $widgets_path = base_path('Themes/'.$this->theme.'/pages/variables.php');
        //     include_once $widgets_path;
            // return view($this->theme.'.pages.'.$p->page_type->template,$the_array[$p->page_type->template]);
            // }
            // return View::first([ $this->theme.'.page', $this->theme.'.all'], ['page'=>$p,'widgets'=>$widgets]);
            return view($this->theme.'.pages.'.$slug);
    }
}
