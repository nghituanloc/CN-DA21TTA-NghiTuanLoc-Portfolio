<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\NguoiDung;
use Illuminate\Support\Facades\Hash;


class NguoiDungController extends Controller
{
    public function index()
    {
        $nguoiDungs = NguoiDung::all();
        // return view('nguoidung.index', compact('nguoiDungs'));
        return response()->json($nguoiDungs);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'tendangnhap' => 'required|string|max:255',
            'matkhau' => 'required|string|max:255',
            'hovaten' => 'required|string|max:255',
            'email' => 'nullable|email',
            'sdt' => 'nullable|string|max:10',
            'diachi' => 'nullable|string|max:255',
            'anhdaidien' => 'nullable|string|max:255',
            'lienketgithub' => 'nullable|string|max:255',
            'tentruongdaihoc' => 'nullable|string|max:255',
            'bangcap' => 'nullable|string|max:255',
            'tennganhhoc' => 'nullable|string|max:255',
            'motabanthan' => 'nullable|string',
        ]);
        $data['matkhau'] = bcrypt($data['matkhau']); // mã hóa mật khẩu


        $nguoiDung = NguoiDung::create($data);

        return response()->json(['message' => 'Người dùng đã được tạo thành công!', 'data' => $nguoiDung]);
    }

    // public function show($id)
    // {
    //     $nguoiDung = NguoiDung::findOrFail($id);
    //     // return view('nguoidung.show', compact('nguoiDung')); // gọi view

    //     unset($nguoiDung['matkhau']);    // Loại bỏ mật khẩu khỏi dữ liệu trả về

    //     return response()->json($nguoiDung);
    // }


public function update(Request $request, $id)
{
    $data = $request->validate([
        'tendangnhap' => 'required|string|max:255',
        'matkhau' => 'nullable|string|max:255', 
        'hovaten' => 'required|string|max:255',
        'email' => 'nullable|email',
        'sdt' => 'nullable|string|max:10',
        'diachi' => 'nullable|string|max:255',
        'anhdaidien' => 'nullable|string|max:255',
        'lienketgithub' => 'nullable|string|max:255',
        'tentruongdaihoc' => 'nullable|string|max:255',
        'bangcap' => 'nullable|string|max:255',
        'tennganhhoc' => 'nullable|string|max:255',
        'motabanthan' => 'nullable|string',
    ]);

    if (!empty($data['matkhau'])) {
        $data['matkhau'] = bcrypt($data['matkhau']); // Chỉ mã hóa nếu có mật khẩu
    }

    $nguoiDung = NguoiDung::findOrFail($id);
    $nguoiDung->update($data);

    return response()->json([
        'message' => 'Cập nhật thông tin thành công!',
        'data' => $nguoiDung,
    ]);
}


    public function destroy($id)
    {
        $nguoiDung = NguoiDung::findOrFail($id);
        $nguoiDung->delete();

        // return redirect()->route('nguoidung.index')->with('success', 'Người dùng đã được xóa!');
        return response()->json(['message' => 'Người dùng đã được xóa thành công!']);
    }

    public function show(Request $request, $id)
    {
        $nguoiDung = NguoiDung::findOrFail($id);

        // // Mật khẩu gốc cần kiểm tra (truyền từ request)
        // $inputPassword = $request->input('password'); // Ví dụ: {"password": "your_password"}

        // // Kiểm tra mật khẩu nếu được cung cấp
        // if ($inputPassword) {
        //     $isPasswordValid = Hash::check($inputPassword, $nguoiDung->matkhau);
        //     return response()->json([
        //         'message' => $isPasswordValid 
        //                         ? 'Mật khẩu chính xác.' 
        //                         : 'Mật khẩu không chính xác.',
        //         'nguoiDung' => $isPasswordValid 
        //                         ? $nguoiDung->makeHidden('matkhau') 
        //                         : null,
        //     ]);
        // }

        // // Nếu không có mật khẩu gốc được cung cấp, trả về thông tin người dùng
        return response()->json([
            // 'message' => 'Không có mật khẩu để kiểm tra.',
            'nguoiDung' => $nguoiDung->makeHidden('matkhau')
        ]);
    }
    public function login(Request $request)
    {
        $data = $request->validate([
            'tendangnhap' => 'required|string',
            'matkhau' => 'required|string',
        ]);

        $user = NguoiDung::where('tendangnhap', $data['tendangnhap'])->first();

        if (!$user || !Hash::check($data['matkhau'], $user->matkhau)) {
            return response()->json(['message' => 'Sai tên đăng nhập hoặc mật khẩu'], 401);
        }

        // Trả về thông tin người dùng (hoặc token nếu sử dụng Sanctum/Passport)
        return response()->json([
            'message' => 'Đăng nhập thành công!',
            'user' => $user,
        ]);
    }
}
