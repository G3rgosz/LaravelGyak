<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StroreStudentData;

class StudalController extends Controller
{
    public function myForm(){
        return view("my_form");
    }
    public function submitStudent(StroreStudentData $request){
        $request->validated();
        print_r($request->all());
    }
    public function addStudent(Request $request){
        if($request->isMethod("post")){
            $request->validate([
                "name" => "required|min:4|max:20",
                "email" => "required|email",
                "phone" => "required|digits_between:9,11"
            ], [
                "name.required" => "Név kötelező",
                "email.required" => "Email kötelező",
                "phone.required" => "Telefon kötelező",
                "name.min" => "A név minimum 4 betűs",
                "name.max" => "A név maximum 20 betűs",
                "email.email" => "Email formátum kötelező",
                "phone.digits_between" => "Telefonszámnak 9 és 11 közötti hosszú számnak kell lennie"
            ]);
            // "email" => "required|email|unique:students,email",
            print_r($request->all());
        }
        return view("my_form");
    }
}
