<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChungChi extends Model
{
    use HasFactory;

    protected $table = 'chungchi'; // Tên bảng trong cơ sở dữ liệu
    protected $primaryKey = 'machungchi'; // Khóa chính của bảng

    // Các trường có thể được gán giá trị hàng loạt
    protected $fillable = [
        'tenchungchi',
        'manguoidung',
        'tentochuccap',
    ];

    /**
     * Quan hệ với model NguoiDung
     * Một chứng chỉ thuộc về nhiều người dùng thông qua bảng trung gian.
     */
    public function nguoiDung()
    {
        return $this->belongsTo(NguoiDung::class, 'manguoidung', 'manguoidung');
    }

   

}
