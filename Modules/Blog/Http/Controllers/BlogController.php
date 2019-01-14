<?php

namespace Modules\Blog\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use SEO;
use Modules\Zof\Entities\Option;
use Modules\Blog\Entities\Post;
use Modules\Blog\Entities\Category;
class BlogController extends Controller
{
    private $theme = "";
    public function __construct(){
        $this->theme = Option::where('name','theme_current')->first()->value; 
    }
    public function index(){
		$posts = Post::orderBy('id','desc')->paginate(10);        
    	return view( $this->theme.'.module.blog',['posts'=>$posts]);
    }
    public function single_post($slug){
        $post = Post::where('slug',$slug)->first();
        SEO::setTitle($post->title);
        SEO::setDescription($post->slug);
        SEO::opengraph()->setUrl(url()->current());
        SEO::setCanonical(url()->current());
        SEO::opengraph()->addProperty('url', url()->current());
        SEO::opengraph()->addProperty('type', 'website');
        SEO::opengraph()->addProperty('title', $post->title);
        SEO::opengraph()->addProperty('description', $post->excerpt);
        SEO::opengraph()->addProperty('image', url($post->picture));
        return view( $this->theme.'.module.blog_single',['post'=>$post] );
    }
}
