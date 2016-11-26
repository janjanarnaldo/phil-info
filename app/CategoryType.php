<?php

namespace App;
use App\Category;

use Illuminate\Database\Eloquent\Model;

class CategoryType extends Model
{
    protected $fillable = [
        'description',
    ];

    public function categories() {
    	return $this->hasMany('App\Category');
    }

}
