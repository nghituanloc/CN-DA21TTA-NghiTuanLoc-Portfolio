<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NguoiDungController;
use App\Http\Controllers\BaiVietController;
use App\Http\Controllers\ChungChiController;
use App\Http\Controllers\DuAnController;
use App\Http\Controllers\KyNangController;
use App\Http\Controllers\ThamGiaController;
use App\Http\Controllers\ToChucCapChungChiController;
use App\Http\Controllers\VaiTroController;
use App\Http\Controllers\DaDatController;


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
// Định tuyến cho VaiTro
Route::prefix('vaitro')->group(function () {
    Route::get('/', [VaiTroController::class, 'index']); // Lấy danh sách vai trò
    Route::post('/create', [VaiTroController::class, 'store']); // Tạo vai trò mới
    Route::get('/{id}', [VaiTroController::class, 'show']); // Lấy thông tin chi tiết vai trò
    Route::put('/{id}', [VaiTroController::class, 'update']); // Cập nhật vai trò
    Route::delete('/{id}', [VaiTroController::class, 'destroy']); // Xóa vai trò
});
// Định tuyến cho ThamGia
Route::prefix('thamgia')->group(function () {
    Route::get('/', [ThamGiaController::class, 'index']); // Lấy danh sách tham gia
    Route::post('/create', [ThamGiaController::class, 'store']); // Thêm thông tin tham gia
    Route::put('/{id}', [ThamGiaController::class, 'update']); // Cập nhật
    Route::get('/{id}', [ThamGiaController::class, 'show']); // Lấy thông tin chi tiết tham gia
    Route::delete('/{id}', [ThamGiaController::class, 'destroy']); // Xóa thông tin tham gia
});

// Định tuyến cho ToChucCapChungChi
Route::prefix('tochuc')->group(function () {
    Route::get('/', [ToChucCapChungChiController::class, 'index']); // Lấy danh sách tổ chức
    Route::post('/create', [ToChucCapChungChiController::class, 'store']); // Tạo tổ chức mới
    Route::get('/{id}', [ToChucCapChungChiController::class, 'show']); // Lấy thông tin chi tiết tổ chức
    Route::put('/{id}', [ToChucCapChungChiController::class, 'update']); // Cập nhật tổ chức
    Route::delete('/{id}', [ToChucCapChungChiController::class, 'destroy']); // Xóa tổ chức
});


// Định tuyến cho DaDat
Route::prefix('dadat')->group(function () {
    Route::get('/', [DaDatController::class, 'index']); //Lấy all
    Route::post('/create', [DaDatController::class, 'store']);   // Tạo mới
    Route::get('/{manguoidung}/{machungchi}/{matochuc}', [DaDatController::class, 'show']);// Lấy thông tin 1 id
    Route::delete('/{manguoidung}/{machungchi}/{matochuc}', [DaDatController::class, 'destroy']); 
});
