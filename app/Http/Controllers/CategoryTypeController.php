<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\CategoryType;

class CategoryTypeController extends Controller
{
    
    public function store(Request $request) {
    	$category_type = CategoryType::create(['description' => $request->description]);
    	$category_type->save();
    }

    public function update($category_type_id, Request $request) {
    	$category_type = CategoryType::findOrfail($category_id);
    	$category_type->description = $request->description;
    	$category_type->save();
    }

    public function delete($category_type_id) {
    	$category_type = CategoryType::findOrfail($category_id);
    	$category_type->delete();
    }
}
