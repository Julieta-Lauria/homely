<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Product;


class CategoriesController extends Controller
{
  public function index()
  {
    $categories = Category::all();

    $vac = compact("categories");

    return view("categories", $vac);
  }
}
