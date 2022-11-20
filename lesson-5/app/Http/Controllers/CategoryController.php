<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\News;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(Category $category) {
        return view('news.categories', [
            'categories' => $category,
        ]);
    }

}
