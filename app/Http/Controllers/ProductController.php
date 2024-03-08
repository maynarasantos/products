<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function teste(Request $request){
        return $request->input("name");
    }
}
//onlys somente 
//execept quais dados quero exeto 


