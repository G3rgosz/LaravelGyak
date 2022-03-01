<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudalController extends Controller
{
    // public function myForm(){
    //     return view("my_form");
    // }
    // public function submitStudent(Request $request){
    //     print_r($request->all());
    // }
    public function addStudent(Request $request){
        if($request->isMethod("post")){
            $request->validate([
                "name" => "required|min:4|max:20",
                "email" => "required|email",
                "phone" => "required"
            ]);
            print_r($request->all());
        }
        return view("my_form");
    }
}
