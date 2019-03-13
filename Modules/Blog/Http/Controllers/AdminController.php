<?php

namespace Modules\Blog\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;

use Modules\Blog\Entities\Post;
use Modules\Zof\Entities\Option;
class AdminController extends Controller
{
    private $theme = "";
    public function __construct(){
			$this->middleware('isAdmin');
			$this->theme = Option::where('name','theme_current')->first()->value;
    }
    public function create(Request $request){
			if($request['filepath'] == null){
				$request['filepath'] = "/photos/default.jpg";
			}
    	Post::create([
    		'body' => $request['tm'],
    		'title' => $request['title'],
    		'picture' => $request['filepath'],
    		// 'status' => 'published',
			'slug' => str_replace(' ','-',$request['title']),
			'excerpt' => substr($request['tm'],0,25)
    	]);
    	return redirect()->back();
	}

	public function edit_post_submit(Request $request){
		if($request['filepath'] == null){
			$request['filepath'] = "/photos/default.jpg";
		}
		$post = Post::find($request['post_id']);
		$post->title = $request['title'];
		$post->picture = $request['filepath'];
		$post->body = $request['tm'];
		$post->slug = str_replace(' ','-',$request['title']);
		$post->excerpt = substr($request['tm'],0,25);
		$post->save();
		return redirect()->back();
	}
	public function edit_post($id){
		$post = Post::find($id);
		return view('blog::admin.edit_post',['post'=>$post]);
	}
	public function delete_post($id){
		$post = Post::find($id);
		$post->delete();
		return redirect()->back();
	}
	public function toggle_post_status($id){
		$post = Post::find($id);
		if($post->status=="published"){
			$post->status = "draft";
		}else{
			$post->status = "published";
		}
		$post->save();
    	return redirect()->back();
    }
    public function index(){
		$posts = Post::orderBy('id','desc')->paginate(10);
    	return view('blog::admin.create',[
    		'posts' => $posts,
    	]);
	}
	
	public function all(){
		return view('blog::admin.all',[
    		'posts' => Post::all()->sortByDesc('id'),
		]);
	}
}
