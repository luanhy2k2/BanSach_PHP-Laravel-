<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use App\Models\tg;
use App\Models\nhasx;
use App\Models\loaisp;
use App\Models\giaca;

class sanpham extends Model
{
    use HasFactory;
     public $primaryKey = "sanp_id";
     public $timestamps = FALSE;
    protected $table = 'sanpham';
    protected $fillable = ['sanp_id', 'sanp_name', 'size', 'tg_id', 'loai_id', 'nsx_id', 'soTrang', 'tomTat', 'namsx', 'image'];
    public function tg():Hasone
    {
        return $this->hasOne(tg::class, 'tG_id','tg_id');
    }
    public function nhasx():Hasone
    {
        return $this->hasOne(nhasx::class, 'nsx_id','nsx_id');
    }
    public function loaisp():Hasone
    {
        return $this->hasOne(loaisp::class, 'loai_id','loai_id');
    }
    public function giaca():Hasone
    {
        return $this->hasOne(giaca::class, 'sanp_id','sanp_id');
    }
    
}
