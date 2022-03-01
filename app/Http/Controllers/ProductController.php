<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function addProduct(Request $request){
        if($request->isMethod("post")){
            print_r($request->all());
        }
        return view("productsform");
    }
}
