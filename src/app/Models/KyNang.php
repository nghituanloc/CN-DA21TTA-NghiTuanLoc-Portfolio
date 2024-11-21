<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KyNang extends Model
{
    use HasFactory;

    protected $table = 'kynang'; // Tên bảng
    protected $primaryKey = 'makynang'; // Khóa chính

    protected $fillable = [
        'manguoidung',
        'tenkynang',
        'motakynang',
    ];

    // Quan hệ với bảng NguoiDung
   
    public function nguoiDung()
    {
        return $this->belongsTo(NguoiDung::class, 'manguoidung', 'manguoidung');
    }
}
