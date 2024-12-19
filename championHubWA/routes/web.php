<?php

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
    return view('home');
});
Route::get('/login', function () {
    return view('auth.login'); // Trả về view 'login'
})->name('login');

Route::get('/signin', function () {
    return view('auth.signin'); // Trả về view 'signin'
})->name('signin');

use App\Models\GiaiDau; // Nếu bạn sử dụng model GiaiDau

Route::get('/test-query', function () {
    // Truy vấn tất cả dữ liệu từ bảng giai_dau
    $giaiDaus = GiaiDau::all();

    // Trả về kết quả dưới dạng JSON để dễ dàng kiểm tra
    return response()->json($giaiDaus);
});

Route::get('/test-query', [TestController::class, 'testQuery']);

