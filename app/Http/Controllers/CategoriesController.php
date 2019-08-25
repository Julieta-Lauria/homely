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

  public function showCategories($name)
  {
    $categories = Category::where('name', $name)->get();
    $id = $categories[0]->id;
    //$nana = Category::find($id)->products();
//Busco en categorias con los datos de la relacion de productos, solo en el id de la categoria definida
    $productsCategory = Category::with('products')->find($id);


    //dd($nana);





    $vac = compact("productsCategory");

    return view("categories-show", $vac);
  }
}
