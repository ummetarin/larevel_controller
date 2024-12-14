<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
   public function handleform(Request $request)
   {
     $name=$request->input('name');
     $email=$request->input('email');
     $number=$request->input('number');   

     return "Form submitted to !,$name,$email";
   }
}
