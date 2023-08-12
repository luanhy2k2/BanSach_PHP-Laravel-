<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class chitietkho extends Model
{
    use HasFactory;
    public $primaryKey = "maChiTietKho";
    protected $table = 'chitietkho';
    protected $fillable = ['maChiTietKho', 'maKho', 'sanp_id', 'soLuong'];
    public $timestamps = FALSE;
}
