<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DuAn extends Model
{
    use HasFactory;

    protected $table = 'duan'; // Tên bảng
    protected $primaryKey = 'maduan'; // Khóa chính

    protected $fillable = [
        'tenduan',
        'motaduan',
        'noilamviec',
        'ngaybd',
        'ngaykt',
        'lienketduan',
    ];

    // Quan hệ với bảng ThamGia
    public function thamgias()
    {
        return $this->hasMany(ThamGia::class, 'maduan', 'maduan');
    }
    public function nguoiDung()
    {
        return $this->belongsToMany(NguoiDung::class, 'thamgia', 'madduan', 'manguoidung')
                    ->withPivot('mavaitro');
    }
}
?>
