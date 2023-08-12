<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class donhang extends Model
{
    use HasFactory;
    public $primaryKey = "maDonHang";
    protected $table = 'donhang';
    protected $fillable = ['maDonHang', 'maKhachHang', 'ngayDat', 'trangThai'];
    public $timestamps = FALSE;
}
