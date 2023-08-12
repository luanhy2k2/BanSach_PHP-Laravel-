<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use App\Models\nguoidung;

class hoadonnhap extends Model
{
    use HasFactory;
    public $primaryKey = "soHoaDon";
    protected $table = 'hoadonnhap';
    // protected $fillable = [ 'soHoaDon', 'ngayBan', 'maKhachHang', 'giaTien'];
    public function nguoidung():Hasone
    {
        return $this->hasOne(nguoidung::class, 'maNguoiDung','maNguoiDung');
    }
    public $timestamps = FALSE;
}
