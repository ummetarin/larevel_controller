<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Data extends Controller
{
  public function handledata(Request $request){
    $name=$request->input('name');
    $des=$request->input('des');
    $price=$request->input('price');
    return "Price $price,Name $name,des $des";
  }
}
