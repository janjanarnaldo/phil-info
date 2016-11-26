<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Category;
use App\User;


class Post extends Model
{
    protected $fillable = [
        'category_id', 'user_id', 'subject', 'body',
    ];

    public function category() {
    	return $this->belongsTo('App\Category');
    }

    public function user() {
    	return $this->belongsTo('App\User');
    }
}
