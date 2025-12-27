<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SinhVien; // Import Model SinhVien

class SinhVienController extends Controller
{
    // Hiển thị danh sách
    public function index()
    {
        // Lấy tất cả dữ liệu từ bảng sinh_viens
        $danhSachSV = SinhVien::all();
        // Trả về view và truyền biến
        return view('sinhvien.list', compact('danhSachSV'));
    }

    // Lưu dữ liệu từ form
    public function store(Request $request)
    {
        // TODO 13: Lấy toàn bộ dữ liệu từ form
        $data = $request->all();

        // TODO 14: Dùng Eloquent ::create() để lưu vào CSDL
        // Các trường 'name' trong form phải khớp với $fillable trong Model
        SinhVien::create($data);

        // TODO 15: Chuyển hướng về trang danh sách
        return redirect()->route('sinhvien.index');
    }
}
