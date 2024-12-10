<?php

// use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Route;

// /*
// |--------------------------------------------------------------------------
// | API Routes
// |--------------------------------------------------------------------------
// |
// | Here is where you can register API routes for your application. These
// | routes are loaded by the RouteServiceProvider and all of them will
// | be assigned to the "api" middleware group. Make something great!
// |
// */

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NguoiDungController;
use App\Http\Controllers\BaiVietController;
use App\Http\Controllers\ChungChiController;
use App\Http\Controllers\DuAnController;
use App\Http\Controllers\KyNangController;


// Định tuyến cho NguoiDung
Route::prefix('nguoidung')->group(function () {
    Route::get('/', [NguoiDungController::class, 'index']); // Lấy danh sách người dùng
    Route::post('/create', [NguoiDungController::class, 'store']); // Tạo người dùng mới
    Route::get(uri: '/{id}', action: [NguoiDungController::class, 'show']); // Lấy thông tin chi tiết người dùng
    // Route::post('/{id}/checkpass', [NguoiDungController::class, 'checkpass']); // kt pass
    Route::put('/{id}', [NguoiDungController::class, 'update']); // Cập nhật thông tin người dùng
    Route::delete('/{id}', [NguoiDungController::class, 'destroy']); // Xóa người dùng
    Route::post('/login', [NguoiDungController::class, 'login']);

});

// Định tuyến cho BaiViet
Route::prefix('baiviet')->group(function () {
    Route::get('/', [BaiVietController::class, 'index']); // Lấy danh sách bài viết
    Route::post('/create', [BaiVietController::class, 'store']); // Tạo bài viết mới
    Route::get('/{id}', [BaiVietController::class, 'show']); // Lấy thông tin chi tiết bài viết
    Route::put('/{id}', [BaiVietController::class, 'update']); // Cập nhật bài viết
    Route::delete('/{id}', [BaiVietController::class, 'destroy']); // Xóa bài viết
});

// Định tuyến cho ChungChi
Route::prefix('chungchi')->group(function () {
    Route::get('/', [ChungChiController::class, 'index']); // Lấy danh sách chứng chỉ
    Route::post('/create', [ChungChiController::class, 'store']); // Tạo chứng chỉ mới
    Route::get('/{id}', [ChungChiController::class, 'show']); // Lấy thông tin chi tiết chứng chỉ
    Route::put('/{id}', [ChungChiController::class, 'update']); // Cập nhật chứng chỉ
    Route::delete('/{id}', [ChungChiController::class, 'destroy']); // Xóa chứng chỉ
});

// Định tuyến cho DuAn
Route::prefix('duan')->group(function () {
    Route::get('/', [DuAnController::class, 'index']); // Lấy danh sách dự án
    Route::post('/create', [DuAnController::class, 'store']); // Tạo dự án mới
    Route::get('/{id}', [DuAnController::class, 'show']); // Lấy thông tin chi tiết dự án
    Route::put('/{id}', [DuAnController::class, 'update']); // Cập nhật dự án
    Route::delete('/{id}', [DuAnController::class, 'destroy']); // Xóa dự án
});

// Định tuyến cho KyNang
Route::prefix('kynang')->group(function () {
    Route::get('/', [KyNangController::class, 'index']); // Lấy danh sách kỹ năng
    Route::post('/create', [KyNangController::class, 'store']); // Tạo kỹ năng mới
    Route::get('/{id}', [KyNangController::class, 'show']); // Lấy thông tin chi tiết kỹ năng
    Route::put('/{id}', [KyNangController::class, 'update']); // Cập nhật kỹ năng
    Route::delete('/{id}', [KyNangController::class, 'destroy']); // Xóa kỹ năng
});


