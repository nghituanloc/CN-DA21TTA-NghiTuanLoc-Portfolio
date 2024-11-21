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
        $chungChis = ChungChi::all();
        // return view('chungchi.index', data: compact('chungChis'));
        return response()->json($chungChis);

    }

    /**
     * Hiển thị form để tạo chứng chỉ mới.
     */
    // public function create()
    // {
    //     return view('chungchi.create');
    // }

    /**
     * Lưu chứng chỉ mới vào cơ sở dữ liệu.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'tenchungchi' => 'required|string|max:255',
        ]);

        ChungChi::create($data);
        return response()->json(['message' => 'Chứng chỉ đã được tạo thành công!', 'data' => $data]);

        // return redirect()->route('chungchi.index')->with('success', 'Chứng chỉ đã được thêm thành công!');
    }

    /**
     * Hiển thị chi tiết một chứng chỉ cụ thể.
     */
    public function show($id)
    {
        $chungChi = ChungChi::findOrFail($id);
        // return view('chungchi.show', compact('chungChi'));
        return response()->json($chungChi);
    }

    /**
     * Hiển thị form để chỉnh sửa một chứng chỉ.
     */
    // public function edit($id)
    // {
    //     $chungChi = ChungChi::findOrFail($id);
    //     return view('chungchi.edit', compact('chungChi'));
    // }

    /**
     * Cập nhật chứng chỉ cụ thể trong cơ sở dữ liệu.
     */
    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'tenchungchi' => 'required|string|max:255',
        ]);

        $chungChi = ChungChi::findOrFail($id);
        $chungChi->update($data);

        // return redirect()->route(route: 'chungchi.index')->with('success', 'Chứng chỉ đã được cập nhật thành công!');
        return response()->json(['message' => 'Chứng chỉ đã được cập nhật thành công!','data' => $data]);
    }

    /*
     * Xóa một chứng chỉ khỏi cơ sở dữ liệu.
     */
    public function destroy($id)
    {
        $chungChi = ChungChi::findOrFail($id);
        $chungChi->delete();

        // return redirect()->route('chungchi.index')->with('success', 'Chứng chỉ đã được xóa!');
        return response()->json(['message' => 'Chứng chỉ đã được xóa thành công!','data' => $chungChi ]);
    }
}
