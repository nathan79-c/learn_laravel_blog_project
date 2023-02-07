<?php

use App\Http\Controllers\AritcleController;
use App\Http\Controllers\firstController;
use App\Http\Controllers\UserController;
use App\Models\Article;
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

 route::post('/accueil',[AritcleController::class,'store'])->name('articles');
 route::get('/accueil' ,[AritcleController::class,'accueil'])->name('accueil');
 
route::middleware(['guest'])->group(function(){
    route::get('/registrer',[UserController::class,'registrer'])->name('registrer');
    route::post('/registrer',[UserController::class,'handleRegistrer'])->name('registrer');
    route::get('/login',[UserController::class,'login'])->name('login');
    route::post('/login',[UserController::class,'handleLogin'])->name('login');

   

});

route::middleware(['auth'])->group(function (){
     
        route::prefix('articles')->group(function(){
    route::get('/{article}',[AritcleController::class,'show'])->name('articles.show')->withoutMiddleware('auth');
    route::get('/edit/{article}',[AritcleController::class,'edit'])->name('articles.edit');
    route::put('/edit/{article}',[AritcleController::class,'update'])->name('articles.update');
    route::delete('/delete/{article}',[AritcleController::class,'delete'])->name('articles.delete');
  
    

   

});
  route::get('/logout',[UserController::class,'logout'])->name('logout');

route::get('/mine', [AritcleController::class,'mine'])->name('myArticles');




});
