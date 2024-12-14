<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class form extends Controller
{
    public function handleform(Request $request){
     
        $name=$request->input('name');
        $img=$request->input('img');
    
        return view('datas',['datas'=>$name]);

    }
}
