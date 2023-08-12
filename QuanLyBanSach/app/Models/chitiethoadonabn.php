<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\sanpham;
use Illuminate\Database\Eloquent\Relations\HasOne;
class chitiethoadonabn extends Model
{
    use HasFactory;
    public $primaryKey = "maChiTietHoaDonBan";
    protected $table = 'chitiethoadonban';
    public function sanpham():Hasone
    {
        return $this->hasOne(sanpham::class, 'sanp_id','sanp_id');
    }
    public $timestamps = FALSE;
}
