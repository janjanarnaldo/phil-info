<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Category;

// 'category_type_id', 'name', 'description',
class CategoryController extends Controller
{
    public function store(Request $request) {
    	$data = [
	    	'category_type_id' => $request->category_type_id,
	    	'name' => $request->name,
	    	'description' => $request->description
    	];

    	$category = Category::create($data);

    	$category->save();
    }

    public function update(Request $request, $category_id) {
    	$category = Category::findOrFail($category_id);

    	$category->category_type_id = $request->category_type_id;
    	$category->name = $request->name;
    	$category->description = $request->description;

    	$category->save();
    }

    public function delete($category_id) {
    	$category = Category::findOrFail($category_id);
    	$category->delete();
    }
    public function index(){
    	return view('Category.index');
    }
}
