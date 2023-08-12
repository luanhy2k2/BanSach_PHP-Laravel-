<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\sanpham;

class chitiethoadonnhap extends Model
{
    use HasFactory;
    public $primaryKey = "maChiTietHoaDonNhap";
    protected $table = 'chitiethoadonnhap';
    // protected $fillable = [ 'soHoaDon', 'ngayBan', 'maKhachHang', 'giaTien'];
    public function sanpham():Hasone
    {
        return $this->hasOne(sanpham::class, 'sanp_id','sanp_id');
    }
    public $timestamps = FALSE;
}
