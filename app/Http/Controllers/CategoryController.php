<?php

namespace App\Http\Controllers;
use App\Models\Category;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function show(Category $category){
        return view('servicios',[
            'category' => $category,
            'servicios' => $category->servicios()->with('category')->latest()->paginate()
        ]);
    }
}
