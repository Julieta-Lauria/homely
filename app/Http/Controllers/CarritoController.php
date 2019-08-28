<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Cart;

class CarritoController extends Controller
{
  public function show()
  {
  $cart = Cart::create();
  return view("carrito");
  }

  public function edit($id, Request $request)
  {
    $cart = Cart::find(1);
    $product = Product::find($id);
    $cart->products()->sync([
      $id => [
        "quantity" => $request->get("quantity"), /*get para obtener dato de un objeto, no es array*/
        "total_price" => $product->price*$request->get("quantity")
      ]
    ]);

    return redirect()->back();
  }

  public function create($id)
  {
  $cart = Cart::find(1);
  $product = Product::find($id);
  $cart->products()->attach($product, [
    "quantity" => 1,
    "total_price" => $product->price,
  ]);

  return redirect()->back();
  }

  public function delete($id)
  {
    $cart = Cart::find(1);
    $product = Product::find($id);
    $cart->products()->detach($product);

    return redirect()->back();
  }


}
