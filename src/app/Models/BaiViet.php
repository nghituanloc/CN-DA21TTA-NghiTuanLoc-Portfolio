<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BaiViet extends Model
{
    use HasFactory;

    protected $table = 'baiviet'; // Tên bảng
    protected $primaryKey = 'mabaiviet'; // Khóa chính

    protected $fillable = [
        'manguoidung',
        'tenbaiviet',
        'noidungbaiviet',
        'ngaydang',
    ];

    // Thiết lập quan hệ với bảng NguoiDung
    public function nguoiDung()
    {
        return $this->belongsTo(NguoiDung::class, 'manguoidung', 'manguoidung');
    }
}

?>