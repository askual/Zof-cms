<?php

namespace Modules\Theme\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Blog\Http\Controllers\BlogController;
use Modules\Zof\Entities\Option;
use Illuminate\Support\Facades\URL;
use Spatie\Sitemap\SitemapGenerator;
use SEO;
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


    public function crawl(){
        SitemapGenerator::create('https://askual.com')->writeToFile(public_path('sitemap.xml'));
    }
    public function opensource(){
        return view($this->theme.'.static.opensource');
    }

    public function index(){
        SEO::setTitle('Home');
        SEO::setDescription('A software development company from Ethiopia');
        SEO::opengraph()->setUrl('https://askual.com/');
        SEO::setCanonical('https://askual.com/');
        SEO::opengraph()->addProperty('type', 'website');
        // SEO::opengraph()->addProperty('type', 'articles');
        // SEO::twitter()->setSite('@askualTech');
        return view($this->theme.'.index');
    }
    public function about(){
        return view($this->theme.'.static.about');
    }
    public function fourofour(){
        return view($this->theme.'.static.404');
    }
    public function fiveoo(){
        return view($this->theme.'.static.500');
    }
    public function contact(){
        return view($this->theme.'.static.contact');
    }
    public function sitemap(){
        return response(file_get_contents(public_path('sitemap.xml')), 200, [
            'Content-Type' => 'application/xml'
        ]);
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
