<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\CategoryType;

class Category extends Model
{
    
	
    public function category_type() {
    	return $this->belongsTo('App\CategoryType');
    }
}
