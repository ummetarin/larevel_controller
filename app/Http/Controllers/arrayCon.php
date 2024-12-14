<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class arrayCon extends Controller
{
    public function listitems(){
        $items=[
            ['id'=>1,'name'=>'taha'],
            ['id'=>2,'name'=>'taha'],
            ['id'=>3,'name'=>'taha'],
        ];
        return view('items',['items'=>$items]);
    }
}
