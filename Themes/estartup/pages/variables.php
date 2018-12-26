<?php
use App\Post;

$the_array = [
	'blog' => [
		'posts' => Post::paginate(2)
		// 'posts' => Collect(Post::all()->sortByDesc('id'))->paginate(2)
	],
	'contact' => [
	],
	'gallery' => [
	],
	'resource' => [
	]
];