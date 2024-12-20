<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KyNang;

class KyNangController extends Controller
{
    /**
     * Hiển thị danh sách tất cả kỹ năng.
     */
    public function index()
    {
        $kyNangs = KyNang::all();
        // return view('kynang.index', compact('kyNangs'));
        return response()->json($kyNangs);

    }


    public function store(Request $request)
    {
        $data = $request->validate([
            'manguoidung' => 'required|integer',
            'tenkynang' => 'required|string|max:255',
            'motakynang' => 'nullable|string|max:255',
        ]);

        KyNang::create($data);

        // return redirect()->route('kynang.index')->with('success', 'Kỹ năng đã được thêm thành công!');
        return response()->json(['message' => 'Đã thêm thành công!'], 200);
    }

    /**
     * Hiển thị chi tiết một kỹ năng cụ thể.
     */
 
    public function show($id)
    {
        $kyNang = KyNang::with(['nguoiDung' => function ($query) {
            $query->select('manguoidung', 'hovaten'); // Chỉ lấy 2 trường này từ bảng người dùng
        }])->findOrFail($id);
    
        return response()->json($kyNang);
    }


    /**
     * Cập nhật kỹ năng trong cơ sở dữ liệu.
     */
    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'manguoidung' => 'required|integer',
            'tenkynang' => 'required|string|max:255',
            'motakynang' => 'nullable|string|max:255',
        ]);

        $kyNang = KyNang::findOrFail($id);
        $kyNang->update($data);

        // return redirect()->route(route: 'kynang.index')->with('success', 'Kỹ năng đã được cập nhật thành công!');
        return response()->json(['message' => 'Kỹ năng đã được cập nhật thành công!']);
    }

    /**
     * Xóa kỹ năng khỏi cơ sở dữ liệu.
     */
    public function destroy($id)
    {
        $kyNang = KyNang::findOrFail($id);
        $kyNang->delete();

        // return redirect()->route('kynang.index')->with('success', 'Kỹ năng đã được xóa!');
        return response()->json(['message' => 'Kỹ năng đã được xóa!']);
    }
}
