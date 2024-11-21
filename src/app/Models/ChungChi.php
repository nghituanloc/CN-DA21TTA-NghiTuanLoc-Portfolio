<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChungChi extends Model
{
    use HasFactory;

    protected $table = 'chungchi'; // Tên bảng
    protected $primaryKey = 'machungchi'; // Khóa chính

    protected $fillable = [
        'tenchungchi',
    ];
    public function nguoiDung()
    {
        return $this->belongsToMany(NguoiDung::class, 'dadat', 'machungchi', 'manguoidung')
                    ->withPivot('matochuc');
    }

    public function toChucCapChungChi()
    {
        return $this->belongsToMany(ToChucCapChungChi::class, 'dadat', 'machungchi', 'matochuc');
    }
}
?>
