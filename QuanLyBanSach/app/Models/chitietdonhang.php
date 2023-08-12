<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class chitietdonhang extends Model
{
    use HasFactory;
    public $primaryKey = "maChiTietDonHang";
    protected $table = 'chitietdonhang';
    protected $fillable = ['maChiTietDonHang', 'maDonHang', 'sanp_id', 'soLuong', 'gia'];
    public $timestamps = FALSE;
}
