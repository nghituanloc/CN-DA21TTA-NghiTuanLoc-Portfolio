<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ToChucCapChungChi extends Model
{
    use HasFactory;


    protected $table = 'tochuccapchungchi'; // Tên bảng chính xác trong cơ sở dữ liệu
    protected $primaryKey = 'matochuc'; // Khóa chính của bảng

    protected $fillable = [
        'tentochuc',
    ];
    public function chungChi()
    {
        return $this->belongsToMany(ChungChi::class, 'dadat', 'matochuc', 'machungchi');
    }

    public function nguoiDung()
    {
        return $this->belongsToMany(NguoiDung::class, 'dadat', 'matochuc', 'manguoidung');
    }
}
?>