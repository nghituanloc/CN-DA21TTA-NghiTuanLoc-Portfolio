<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DaDat;

class DaDatController extends Controller
{
    // Lấy tất cả các bản ghi từ bảng DADAT
    public function index()
    {
        $dadat = DaDat::with(['nguoiDung', 'chungChi', 'toChuc'])->get(); // Gồm quan hệ
        return response()->json($dadat);
    }

    // Tạo mới một bản ghi trong bảng DADAT
    public function store(Request $request)
    {
        try {
            $request->validate([
                'manguoidung' => 'required|exists:nguoidung,manguoidung',
                'machungchi' => 'required|exists:chungchi,machungchi',
                'matochuc' => 'required|exists:tochuccapchungchi,matochuc',
            ]);

            $dadat = DaDat::create([
                'manguoidung' => $request->manguoidung,
                'machungchi' => $request->machungchi,
                'matochuc' => $request->matochuc,
            ]);

            return response()->json(['message' => 'Thêm thông tin đặt chứng chỉ thành công!', 'data' => $dadat], 201);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Lỗi hệ thống', 'error' => $e->getMessage()], 500);
        }
    }


    // Lấy thông tin một bản ghi cụ thể từ bảng DADAT
    public function show($manguoidung, $machungchi, $matochuc)
    {
        $dadat = DaDat::with(['nguoiDung', 'chungChi', 'toChuc'])
            ->where('manguoidung', $manguoidung)
            ->where('machungchi', $machungchi)
            ->where('matochuc', $matochuc)
            ->first();

        if (!$dadat) {
            return response()->json(['message' => 'Không tìm thấy thông tin đặt chứng chỉ!'], 404);
        }

        return response()->json($dadat);
    }

    // Xóa một bản ghi từ bảng DADAT
    public function destroy($manguoidung, $machungchi, $matochuc)
    {
        $dadat = DaDat::where('manguoidung', $manguoidung)
            ->where('machungchi', $machungchi)
            ->where('matochuc', $matochuc)
            ->first();

        if (!$dadat) {
            return response()->json(['message' => 'Không tìm thấy thông tin để xóa!'], 404);
        }

        $dadat->delete();
        return response()->json(['message' => 'Xóa thông tin đặt chứng chỉ thành công!']);
    }
}
