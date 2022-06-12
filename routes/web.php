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

Route::get('/',[PostController::class,'index'])->name('welcome');
Route::get('/post/create',[PostController::class,'create'])->name('posts.create');
Route::post('/post/stores',[PostController::class,'stores'])->name('posts.stores');
Route::get('/register',[PostController::class,'register']);
Route::get('/post/{id}',[PostController::class,'show'])->name('posts.show');
Route::get('/contact',[PostController::class,'contact'])->name('contact');

/*Route::get('/', function () {
    return view('welcome');
});
Route::get('posts',function(){
    return response()->json([
    'title'=>'mon supper site',
    'description'=>'ma super description'
    ]);}
);*/