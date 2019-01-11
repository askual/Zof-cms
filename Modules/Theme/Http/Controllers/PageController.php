<?php

namespace Modules\Theme\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Blog\Http\Controllers\BlogController;
use Modules\Zof\Entities\Option;
use Illuminate\Support\Facades\URL;

class PageController extends Controller
{
    private $theme = "";
    public function __construct(){
        $this->theme = Option::where('name','theme_current')->first()->value; 
    }
    public function faq(){
        return view($this->theme.'.static.faq');
        // return URL::signedRoute('theme.static_page', ['slug' => 'whereareyounow']);
        // return view($this->theme.'.static.'.$slug);
    }

    public function opensource(){
        return view($this->theme.'.static.opensource');
    }

    public function index(){
        return view($this->theme.'.index');
    }public function about(){
        return view($this->theme.'.static.about');
    }
    public function contact(){
        return view($this->theme.'.static.contact');
    }
    public function sitemap(){
        return view($this->theme.'.static.sitemap');
    }
    public function services(){
        return view($this->theme.'.static.services');
    }
    public function products(){
        return view($this->theme.'.static.products');
    }
    public function press(){
        return view($this->theme.'.static.press');
    }
    public function privacy(){
        return view($this->theme.'.static.privacy');
    }
    public function terms(){
        return view($this->theme.'.static.terms');
    }
}
