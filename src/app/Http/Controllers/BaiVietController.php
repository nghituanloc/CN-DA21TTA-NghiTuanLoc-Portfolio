<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BaiViet;

class BaiVietController extends Controller
{
    /**
     * Hiển thị danh sách tất cả bài viết.
     */
    public function index()
    {
        $baiViets = BaiViet::all();
        // return view('baiviet.index', compact('baiViets'));
        return response()->json($baiViets);
    }

    /**
     * Hiển thị form để tạo bài viết mới.
     */
    // public function create()
    // {
    //     return view('baiviet.create');
        
    // }

    /**
     * Lưu bài viết mới vào cơ sở dữ liệu.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'manguoidung' => 'required|integer',
            'tenbaiviet' => 'required|string|max:255',
            'noidungbaiviet' => 'required|string',
            'ngaydang' => 'nullable|date',
        ]);

        // try {
        //     $baiviet = BaiViet::create($data); // Đảm bảo model BaiViet tồn tại
        //     return response()->json(['message' => 'Bài viết được tạo thành công', 'data' => $baiviet], 201);
        // } catch (\Exception $e) {
        //     return response()->json(['message' => 'Lỗi hệ thống', 'error' => $e->getMessage()], 500);
        // }
        BaiViet::create($data);

        // // return redirect()->route('baiviet.index')->with('success', 'Bài viết đã được thêm thành công!');
        return response()->json(['message' => 'BaiViet đã được tạo thành công!', 'data' => $data]);
    }

    /**
     * Hiển thị chi tiết một bài viết cụ thể.
     */
    public function show($id)
    {
        $baiViet = BaiViet::findOrFail($id);
        // return view('baiviet.show', compact('baiViet'));
        return response()->json($baiViet);
    }

    /**
     * Hiển thị form để chỉnh sửa bài viết.
     */
    // public function edit($id)
    // {
    //     $baiViet = BaiViet::findOrFail($id);
    //     return view('baiviet.edit', compact('baiViet'));
    // }

    /**
     * Cập nhật bài viết trong cơ sở dữ liệu.
     */
    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'manguoidung' => 'required|integer',
            'tenbaiviet' => 'required|string|max:255',
            'noidungbaiviet' => 'required|string',
            'ngaydang' => 'nullable|date',
        ]);

        $baiViet = BaiViet::findOrFail($id);
        $baiViet->update($data);

        // return redirect()->route('baiviet.index')->with('success', 'Bài viết đã được cập nhật thành công!');
        return response()->json(['message' => 'BaiViet đã được cập nhật thành công!', 'data' => $data]);
    }

    /**
     * Xóa bài viết khỏi cơ sở dữ liệu.
     */
    public function destroy($id)
    {
        $baiViet = BaiViet::findOrFail($id);
        $baiViet->delete();

        // return redirect()->route('baiviet.index')->with('success', 'Bài viết đã được xóa!');
        return response()->json(['message' => 'BaiViet đã được xóa thành công!','data' => $baiViet]);
    }
}
