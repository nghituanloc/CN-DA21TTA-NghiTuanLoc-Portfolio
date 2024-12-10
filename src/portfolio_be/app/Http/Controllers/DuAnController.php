<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DuAn;

class DuAnController extends Controller
{
    public function index()
    {
        $duAns = DuAn::all();
        return response()->json($duAns);
        // return view(view: 'duan.index', compact('duAns'));
    }

    // public function create()
    // {
    //     return view('duan.create');
    // }

    public function store(Request $request)
    {
        $data = $request->validate([
            'tenduan' => 'required|string|max:255',
            'motaduan' => 'nullable|string|max:255',
            'noilamviec' => 'nullable|string|max:255',
            'ngaybd' => 'nullable|date',
            'ngaykt' => 'nullable|date',
            'lienketduan' => 'nullable|string|max:255',
            'manguoidung' => 'required|exists:nguoidung,manguoidung', // Ràng buộc manguoidung phải tồn tại trong bảng nguoidung
        ]);

        DuAn::create($data);
        return response()->json(['message' => 'Tạo thành công dự án!'], 200);
        


        // return redirect()->route('duan.index')->with('success', 'Dự án đã được tạo thành công!');
    }

    public function show($id)
    {
        $duAn = DuAn::with(['nguoiDung' => function ($query) {
            $query->select('manguoidung', 'hovaten'); // Chỉ lấy 2 trường này từ bảng người dùng
        }])->findOrFail($id);
    
        return response()->json($duAn);
    }

    // public function edit($id)
    // {
    //     $duAn = DuAn::findOrFail($id);
    //     return view('duan.edit', compact('duAn'));
    // }

    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'tenduan' => 'required|string|max:255',
            'motaduan' => 'nullable|string|max:255',
            'noilamviec' => 'nullable|string|max:255',
            'ngaybd' => 'nullable|date',
            'ngaykt' => 'nullable|date',
            'lienketduan' => 'nullable|string|max:255',
            'manguoidung' => 'required|exists:nguoidung,manguoidung', // Ràng buộc manguoidung phải tồn tại trong bảng nguoidung
        ]);

        $duAn = DuAn::findOrFail($id);
        $duAn->update($data);

        // return redirect()->route(route: 'duan.index')->with('success', 'Cập nhật dự án thành công!');
        return response()->json($data);

    }

    public function destroy($id)
    {
        $duAn = DuAn::findOrFail($id);
        $duAn->delete();

        // return redirect()->route('duan.index')->with('success', 'Dự án đã được xóa!');
        return response()->json([
            'message' => 'Xóa thành công dự án!',
            'data' => $duAn
        ]);
            }
}
