<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StroreStudentData extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            "name" => "required|min:4|max:20",
            "email" => "required|email",
            "phone" => "required|digits_between:9,11"
        ];
    }
    public function message(){
        return [
            "name.required" => "Név kötelező",
            "email.required" => "Email kötelező",
            "phone.required" => "Telefon kötelező",
            "name.min" => "A név minimum 4 betűs",
            "name.max" => "A név maximum 20 betűs",
            "email.email" => "Email formátum kötelező",
            "phone.digits_between" => "Telefonszámnak 9 és 11 közötti hosszú számnak kell lennie"
        ];
    }
}
