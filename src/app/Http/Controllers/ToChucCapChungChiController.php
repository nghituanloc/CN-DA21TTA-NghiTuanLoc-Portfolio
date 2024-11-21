<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ToChucCapChungChi;

class ToChucCapChungChiController extends Controller
{
    /**
     * Hiển thị danh sách tất cả tổ chức cấp chứng chỉ.
     */
    public function index()
    {
        $toChucs = ToChucCapChungChi::all();
        return response()->json($toChucs);
        
    }

    /**
     * Hiển thị form để thêm tổ chức mới.
     */
    // public function create()
    // {
    //     return view('tochuc.create');
    // }

    /**
     * Lưu tổ chức mới vào cơ sở dữ liệu.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'tentochuc' => 'required|string|max:255',
        ]);

        ToChucCapChungChi::create($data);

        // return redirect()->route('tochuc.index')->with('success', 'Tổ chức đã được thêm thành công!');
        return response()->json(['message' => ' tổ chức cấp Chứng chỉ đã được tạo thành công!', 'data' => $data]);

    }

    /**
     * Hiển thị chi tiết một tổ chức cấp chứng chỉ.
     */
    public function show($id)
    {
        $toChuc = ToChucCapChungChi::findOrFail($id);
        // return view('tochuc.show', compact('toChuc'));
        return response()->json($toChuc);

    }

    /**
     * Hiển thị form để chỉnh sửa tổ chức cấp chứng chỉ.
     */
    // public function edit($id)
    // {
    //     $toChuc = ToChucCapChungChi::findOrFail($id);
    //     // return view('tochuc.edit', compact('toChuc'));
    // }

    /**
     * Cập nhật tổ chức cấp chứng chỉ trong cơ sở dữ liệu.
     */
    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'tentochuc' => 'required|string|max:255',
        ]);

        $toChuc = ToChucCapChungChi::findOrFail($id);
        $toChuc->update($data);

        // return redirect()->route('tochuc.index')->with('success', 'Tổ chức đã được cập nhật thành công!');
        return response()->json(['message' => ' tô chức cấpChứng chỉ đã được cập nhật thành công!','data' => $data]);

    }

    /**
     * Xóa tổ chức cấp chứng chỉ khỏi cơ sở dữ liệu.
     */
    public function destroy($id)
    {
        $toChuc = ToChucCapChungChi::findOrFail($id);
        $toChuc->delete();

        // return redirect()->route('tochuc.index')->with('success', 'Tổ chức đã được xóa!');
        return response()->json(['message' => 'To chức cấp chứng chỉ đã được xóa thành công!','data' => $toChuc ]);

    }
}
