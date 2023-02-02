<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeController;

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
    // return view('welcome');
    return redirect('/form'); // chuyển hướng

});

Route::get('/welcome', function () {
    return 'Chào mừng các bạn đã đến với toidicode.com';
});

Route::get('/hoten/{ten}', function ($ten) {
    return 'hello ' . $ten;
});

Route::get('/thongtin/{ten}/{tuoi}', function ($ten, $tuoi) {
    return "Hello $ten , $tuoi tuổi";
})->where(['ten' => '[a-z]+', 'tuoi' => '[0-9]+'])->middleware('checkage'); 
// ràng buộc thông tin với tuổi là số và tên là chữ  
// kiểm tra tuổi thông qua middleware      


Route::get('/home/{id}', [HomeController::class, 'index'])->where(['id' => '[0-9]+']);

Route::get('/home/page/{page}', [HomeController::class, 'page'])->where(['page' => '[0-9]+']);



Route::get('/path', function (Request $request) {
    return dd([
        $request->url(),
        $request->fullUrl()
    ]);
});



// lấy dữ liệu từ form
use App\Http\Controllers\ControllerName;
Route::get('/form', [ControllerName::class, 'show']);
Route::post('/post', [ControllerName::class, 'post']);

