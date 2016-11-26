<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\CategoryType;

class Category extends Model
{
    protected $fillable = [
        'category_type_id', 'name', 'description',
    ];
	
    public function category_type() {
    	return $this->belongsTo('App\CategoryType');
    }
}
