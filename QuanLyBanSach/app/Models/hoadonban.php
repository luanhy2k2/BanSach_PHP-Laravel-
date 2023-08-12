<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\khachhang;

class hoadonban extends Model
{
    use HasFactory;
   
    public $primaryKey = "soHoaDon";
    protected $table = 'hoadonban';
    protected $fillable = [ 'soHoaDon', 'ngayBan', 'maKhachHang', 'giaTien'];
    public function khachhang():Hasone
    {
        return $this->hasOne(khachhang::class, 'maKhachHang','maKhachHang');
    }
    public $timestamps = FALSE;
}
