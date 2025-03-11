<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoreProductController extends Controller
{
    public function index(Category $category) {
        return $category->products()->cursorPaginate(7);
    }
}
