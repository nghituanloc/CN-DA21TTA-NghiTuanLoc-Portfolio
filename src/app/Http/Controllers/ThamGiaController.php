<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ThamGia;

class ThamGiaController extends Controller
{
    // Lấy tất cả các bản ghi từ bảng ThamGia
    public function index()
    {
        $thamgia = ThamGia::with(['nguoiDung', 'duAn', 'vaiTro'])->get(); // Bao gồm quan hệ
        return response()->json($thamgia);
    }

    // Tạo mới một bản ghi trong bảng ThamGia
    public function store(Request $request)
    {
        try {
            $request->validate([
                'manguoidung' => 'required|exists:nguoidung,manguoidung', // Khóa ngoại từ bảng nguoidung
                'maduan' => 'required|exists:duan,maduan', // Khóa ngoại từ bảng duan
                'mavaitro' => 'required|exists:vaitro,mavaitro', // Khóa ngoại từ bảng vaitro
            ]);

            $thamgia = ThamGia::create([
                'manguoidung' => $request->manguoidung,
                'maduan' => $request->maduan,
                'mavaitro' => $request->mavaitro,
            ]);

            return response()->json(['message' => 'Thêm thông tin tham gia thành công!', 'data' => $thamgia], 201);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Lỗi hệ thống', 'error' => $e->getMessage()], 500);
        }
    }

    // Lấy thông tin một bản ghi cụ thể từ bảng ThamGia
    public function show($manguoidung, $maduan, $mavaitro)
    {
        $thamgia = ThamGia::with(['nguoiDung', 'duAn', 'vaiTro'])
            ->where('manguoidung', $manguoidung)
            ->where('maduan', $maduan)
            ->where('mavaitro', $mavaitro)
            ->first();

        if (!$thamgia) {
            return response()->json(['message' => 'Không tìm thấy thông tin tham gia!'], 404);
        }

        return response()->json($thamgia);
    }

    // Xóa một bản ghi từ bảng ThamGia
    public function destroy($manguoidung, $maduan, $mavaitro)
    {
        $thamgia = ThamGia::where('manguoidung', $manguoidung)
            ->where('maduan', $maduan)
            ->where('mavaitro', $mavaitro)
            ->first();

        if (!$thamgia) {
            return response()->json(['message' => 'Không tìm thấy thông tin để xóa!'], 404);
        }

        $thamgia->delete();
        return response()->json(['message' => 'Xóa thông tin tham gia thành công!']);
    }
}
