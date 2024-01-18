<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

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
// Route::resource("posts", PostController::class);
// Route::post("posts/store", [PostController::class, "store"])->name("posts.store");


Route::controller(PostController::class)->group(function() {
    Route::get("posts", "index")->name("posts");
    Route::get("posts/create", "create")->name("posts.create");
    Route::post("posts/store", "store")->name("posts.store");
    Route::get("posts/edit/{id}", "edit")->name("posts.edit");
    Route::get("posts/delete/{id}", "delete")->name("posts.delete");
    Route::PUT("posts/update/{id}", "update")->name("posts.update");
    Route::get("posts/delete/{id}", "destroy")->name("posts.delete");
});
