<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\PageController;

// // TODO 12: Thêm 2 route này
// Route::get('/', [PageController::class, 'showHomepage']);
// Route::get('/about', [PageController::class, 'showHomepage']);


use App\Http\Controllers\SinhVienController;

// Route hiển thị form và danh sách (GET)
Route::get('/sinhvien', [SinhVienController::class, 'index'])->name('sinhvien.index');

// Route xử lý lưu dữ liệu (POST)
Route::post('/sinhvien', [SinhVienController::class, 'store'])->name('sinhvien.store');
