<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DaDat extends Model
{
    use HasFactory;

    protected $table = 'dadat'; // Tên bảng
    protected $fillable = ['manguoidung', 'machungchi', 'matochuc'];

    // Quan hệ với bảng nguoidung
    public function nguoiDung()
    {
        return $this->belongsTo(NguoiDung::class, 'manguoidung', 'manguoidung');
    }

    // Quan hệ với bảng chungchi
    public function chungChi()
    {
        return $this->belongsTo(ChungChi::class, 'machungchi', 'machungchi');
    }

    // Quan hệ với bảng tochucapchungchi
    public function toChuc()
    {
        return $this->belongsTo(ToChucCapChungChi::class, 'matochuc', 'matochuc');
    }
}
