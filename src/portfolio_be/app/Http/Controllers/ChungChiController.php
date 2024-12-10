<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ChungChi;

class ChungChiController extends Controller
{
    /**
     * Hiển thị danh sách tất cả các chứng chỉ.
     */
    public function index()
    {
        $chungChis = ChungChi::with(['nguoiDung'])->get(); // Lấy danh sách chứng chỉ kèm thông tin người dùng
        return response()->json($chungChis);
    }

    /**
     * Lưu chứng chỉ mới vào cơ sở dữ liệu.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'tenchungchi' => 'required|string|max:255',
            'manguoidung' => 'required|exists:nguoidung,manguoidung', // Ràng buộc manguoidung phải tồn tại trong bảng nguoidung
            'tentochuccap' => 'required|string|max:255',
        ]);

        $chungChi = ChungChi::create($data);
        return response()->json([
            'message' => 'Chứng chỉ đã được tạo thành công!',
            'data' => $chungChi
        ]);
    }

    /**
     * Hiển thị chi tiết một chứng chỉ cụ thể.
     */

    public function show($id)
    {
        $chungChi = ChungChi::with(['nguoiDung' => function ($query) {
            $query->select('manguoidung', 'hovaten'); // Chỉ lấy 2 trường này từ bảng người dùng
        }])->findOrFail($id);
    
        return response()->json($chungChi);
    }
    /**
     * Cập nhật chứng chỉ cụ thể trong cơ sở dữ liệu.
     */
    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'tenchungchi' => 'required|string|max:255',
            'manguoidung' => 'required|exists:nguoidung,manguoidung',
            'tentochuccap' => 'nullable|string|max:255',
        ]);

        $chungChi = ChungChi::findOrFail($id);
        $chungChi->update($data);

        return response()->json([
            'message' => 'Chứng chỉ đã được cập nhật thành công!',
            'data' => $chungChi
        ]);
    }

    /**
     * Xóa một chứng chỉ khỏi cơ sở dữ liệu.
     */
    public function destroy($id)
    {
        $chungChi = ChungChi::findOrFail($id);
        $chungChi->delete();

        return response()->json([
            'message' => 'Chứng chỉ đã được xóa thành công!',
            'data' => $chungChi
        ]);
    }
}
