<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Discussion;
// 'user_id', 'body',
class DiscussionController extends Controller
{
    public function store(Request $resquest) {
    	$data = [
    		'user_id' => $request->user_id,
    		'body' => $request->body
    	];

    	$discussion = Discussion::create($data);
    	$discussion->save();
    }

    public function update(Request $resquest, $discussion_id) {
    	$discussion = Discussion::findOrFail($discussion_id);
    	$discussion->user_id = $request->user_id;
    	$discussion->body = $request->body;

    	$discussion->save();
    }

    public function delete($discussion_id) {
    	$discussion = Discussion::findOrFail($discussion_id);
    	$discussion->save();
    }

  
}
