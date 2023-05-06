<?php

use Illuminate\Support\Facades\Route;

// include StaticController by it's namespace
use App\Http\Controllers\StaticController;

// include StaticController by it's namespace
use App\Http\Controllers\ComputersController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// get routing by controller called StaticController
Route::get('/', array(StaticController::class, 'index'))->name('StaticController.index');
Route::get('/about', array(StaticController::class, 'about'))->name('StaticController.about');
Route::get('/contact', array(StaticController::class, 'contact'))->name('StaticController.contact');
Route::get('/portofolio', array(StaticController::class, 'portofolio'))->name('StaticController.portofolio');
//

// get routing by controller resource
// by default Laravel will make for you computers.show , computers.update etc..... and will name it by default computers.show , computers.update

// route of type resource contain default 7 routs for 7 method in this it's controller ComputersController
Route::resource('computers', ComputersController::class);


// requset in url
Route::get('/store/{category?}/{item?}', function ($category = 2, $item = 2) {
  // ? in request mean that request is optional
    return "<h2>Hello ". $category. "=>" . $item."</h2>";
});

// requset in url
Route::get('/shop/{category?}/{item?}', function ($category = null, $item = null) {
  // ? in request mean that request is optional
  if(isset($category)){
    if(isset($item)){
      return "<h2>Hello ". $category. "=>" . $item."</h2>";
    }
    return "<h2>Hello ". $category . "</h2>";
  }
  return "<h2>Hello shop</h2>";
});


// request without url
Route::get('/store/men/', function () {
    $page = request('page');
    if(isset($page)){
      // using strip_tags to prevent tags in request for security
      return "<h2>Hello men product page ". strip_tags($page) ." </h2>";
    }
    return "<h2>Hello men product </h2>";
});


// return view page called about
// Route::get('/about', function () {
//     return view('about');
// });

// return text
Route::get('/sebai', function () {
    return 'Hello sebai';
});
