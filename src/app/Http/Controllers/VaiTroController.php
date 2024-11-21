<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\VaiTro;

class VaiTroController extends Controller
{
    /**
     * Hiển thị danh sách tất cả vai trò.
     */
    public function index()
    {
        $vaiTros = VaiTro::all();
        // return view('vaitro.index', compact('vaiTros'));
        return response()->json($vaiTros);
        }

    /**
     * Hiển thị form để tạo vai trò mới.
     */
    // public function create()
    // {
    //     return view('vaitro.create');
    // }

    /**
     * Lưu vai trò mới vào cơ sở dữ liệu.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'tenvaitro' => 'required|string|max:30',
        ]);

        VaiTro::create($data);

        // return redirect()->route('vaitro.index')->with('success', 'Vai trò đã được thêm thành công!');
        return response()->json(['message' => 'Vai trò đã được thêm thành công!']);
    }

    /**
     * Hiển thị chi tiết một vai trò cụ thể.
     */
    public function show($id)
    {
        $vaiTro = VaiTro::findOrFail($id);
        // return view('vaitro.show', data: compact('vaiTro'));
        return response()->json( $vaiTro);

    }

    /**
     * Hiển thị form để chỉnh sửa vai trò.
     */
    // public function edit($id)
    // {
    //     $vaiTro = VaiTro::findOrFail($id);
    //     // return view('vaitro.edit', compact('vaiTro'));
    // }

    /**
     * Cập nhật vai trò trong cơ sở dữ liệu.
     */
    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'tenvaitro' => 'required|string|max:30',
        ]);

        $vaiTro = VaiTro::findOrFail($id);
        $vaiTro->update($data);

        // return redirect()->route('vaitro.index')->with('success', 'Vai trò đã được cập nhật thành công!');
        return response()->json(['message' => 'Vai trò đã được cập nhật thành công!']);
        
    }

    /**
     * Xóa vai trò khỏi cơ sở dữ liệu.
     */
    public function destroy($id)
    {
        $vaiTro = VaiTro::findOrFail($id);
        $vaiTro->delete();

        // return redirect()->route('vaitro.index')->with('success', 'Vai trò đã được xóa!');
        return response()->json(['message' => 'Vai trò đã được xoa!']);

    }
}
