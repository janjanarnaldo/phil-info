<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Post;
//  'category_id', 'user_id', 'subject', 'body',
class PostController extends Controller
{
     public function store(Request $request) {
    	$data = [
	    	'category_id' => $request->category_id,
	    	'user_id' => $request->user_id,
	    	'subject' => $request->subject,
	    	'body' => $request->body
    	];

    	$post = Post::create($data);

    	$post->save();
    }

    public function update(Request $request, $post_id) {
    	$post = Post::findOrFail($post_id);

			$post->category_id => $request->category_id,
			$post->user_id => $request->user_id,
			$post->subject => $request->subject,
			$post->body => $request->body

    	$post->save();
    }

    public function delete($post_id) {
    	$post = Post::findOrFail($post_id);
    	$post->delete();
    }
}
