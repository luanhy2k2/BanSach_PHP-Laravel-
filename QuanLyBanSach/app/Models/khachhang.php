<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class khachhang extends Model
{
    use HasFactory;
    public $primaryKey = "maKhachHang";
    protected $table = 'khachhang';
    protected $fillable = ['maKhachHang', 'tenKhachHang', 'diaChi', 'email', 'sdt'];
    public $timestamps = FALSE;
}
