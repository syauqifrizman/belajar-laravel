<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function getAllPostCategory(Category $category){
        return view('category', [
            'title' => $category->name,
            'posts' => $category->post,
            'category' => $category->name
        ]);
    }

    public function getAllCategory(){
        return view('categories', [
            'title' => 'Post Categories',
            'categories' => Category::all()
        ]);
    }
}
