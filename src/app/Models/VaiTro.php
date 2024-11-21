<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VaiTro extends Model
{
    use HasFactory;

    protected $table = 'vaitro'; // Tên bảng
    protected $primaryKey = 'mavaitro'; // Khóa chính

    protected $fillable = [
        'tenvaitro',
    ];
    
    public function duAn()
    {
        return $this->belongsToMany(DuAn::class, 'thamgia', 'mavaitro', 'maduan');
    }
}
?>