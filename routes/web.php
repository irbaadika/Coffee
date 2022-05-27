<?php

use App\Models\Menu;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardMenuController;

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
    return view('home',[
        "title" => "Home"
    ]);
});



Route::get('/menu', [MenuController::class, 'index']);



Route::get('/about', function () {
    return view('about',[
        "title" => "About",
        "name" => "Sikopi",
        "email" => "sikopi@gmail.com",
        "no" => "088888888888"
    ]);
});

//single
Route::get('/menus', [MenuController::class, 'index']);
Route::get('/menus/{menu:slug}', [MenuController::class, 'show']);

Route::get('/categories', function(){
    return view('categories', [
        'title'=>'Menu Categories',
        'categories'=>Category::all()
    ]);
});

Route::get('/categories/{category:slug}', function(Category $category){
    return view('category', [
        'title'=>$category->name,
        'menus'=>$category->menus,
        'category'=>$category->name
    ]);
});

Route::get('/login', [LoginController::class, 'index'])->name('login') ->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);
Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);
Route::get('/dashboard', function(){
    return view('dashboard.index');
})->middleware('auth');

Route::resource('/dashboard/menus', DashboardMenuController::class)->middleware('auth');
