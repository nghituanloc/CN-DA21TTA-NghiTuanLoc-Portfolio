<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NguoiDung extends Model
{
    use HasFactory;

    protected $table = 'nguoidung'; // Tên bảng
    protected $primaryKey = 'manguoidung'; // Khóa chính

    protected $fillable = [
        'tendangnhap',
        'matkhau',
        'hovaten',
        'email',
        'sdt',
        'diachi',
        'anhdaidien',
        'lienketgithub',
        'tentruongdaihoc',
        'bangcap',
        'tennganhhoc',
        'motabanthan',
    ];
    public function baiViet()
    {
        return $this->hasMany(BaiViet::class, 'manguoidung', 'manguoidung');
    }

    public function chungChi()
    {
        return $this->belongsToMany(ChungChi::class, 'dadat', 'manguoidung', 'machungchi')
                    ->withPivot('matochuc');
    }

    public function kyNang()
    {
        return $this->hasMany(KyNang::class, 'manguoidung', 'manguoidung');
    }

    public function duAn()
    {
        return $this->belongsToMany(DuAn::class, 'thamgia', 'manguoidung', 'madduan')
                    ->withPivot('mavaitro');
    }
}

