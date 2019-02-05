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
    public function crawl(){
        SitemapGenerator::create(URL::to('/'))->writeToFile(public_path('sitemap.xml'));
    }
    public function sitemap(){
        return response(file_get_contents(public_path('sitemap.xml')), 200, [
            'Content-Type' => 'application/xml'
        ]);
    }
}
