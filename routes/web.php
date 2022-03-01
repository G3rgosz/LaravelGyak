<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudalController;
use App\Http\Controllers\ProductController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/about-us', function () {
    return view('admin.about-us', [
        "names" => ["Béla", "Géza", "Kata"]
    ]);
});
Route::get('/about', function () {
    return view('admin.about', [
        "page" => "Rólunk"
    ]);
});
Route::get('/products', function () {
    return view('products', [
        "page" => "Termékek"
    ]);
});
Route::get('/names', function () {
    return view('name', [
        "names" => ["Nagy János","Teszt Elek","Rabsz Olga"]
    ]);
});
Route::get('/kapcs', function () {
    return view('kapcsolat');
});
Route::get('/nagy', function () {
    return view('nagyon-nezet');
});
// Route::get('/myform', [StudalController::class, "myForm"]);
// Route::post('/submit-student', [StudalController::class, "submitStudent"]);
Route::match(["get", "post"], "/add-student", [StudalController::class, "addStudent"]);
Route::match(["get", "post"], "/add-product", [ProductController::class, "addProduct"]);