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
        'manguoidung',
    ];


    public function nguoiDung()
    {
        return $this->belongsTo(NguoiDung::class, 'manguoidung', 'manguoidung');
    }
}

