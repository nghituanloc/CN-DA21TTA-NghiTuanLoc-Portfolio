<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ThamGia extends Model
{
    use HasFactory;

    protected $table = 'thamgia'; // Tên bảng
    public $incrementing = false; //  không dùng khóa chính tự tăng
    protected $primaryKey = ['manguoidung', 'maduan', 'mavaitro']; // Composite Key

    protected $fillable = [
        'manguoidung',
        'maduan',
        'mavaitro',
    ];
}
