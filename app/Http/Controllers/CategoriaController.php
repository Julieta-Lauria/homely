<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class CategoriaController extends Controller
{
    function index(){
        $productos = Product::all();
        
        return view('/categoria',compact('productos'));
    }
}
