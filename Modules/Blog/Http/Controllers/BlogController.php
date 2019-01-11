<?php

namespace Modules\Blog\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;

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
        return view( $this->theme.'.module.blog_single',['post'=>$post] );
    }
}
