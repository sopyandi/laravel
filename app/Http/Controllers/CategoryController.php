<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
class CategoryController extends Controller
{
   public function categori(Category $category)
   {
    return view('category', [
        'title' => $category->nama,
        'blog'  => $category->Post,
        'category' => $category->nama
    ]);
   }
   public function data_category()
   {
    return view('categories',[
        'title' => 'List Data Category',
        'category' => Category::all()
    ]);
   }
}
