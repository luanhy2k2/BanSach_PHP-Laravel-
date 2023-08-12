<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class giaca extends Model
{
    use HasFactory;
    public $primaryKey = "maSo";
    protected $table = 'giaca';
    protected $fillable = ['maSo', 'sanp_id', 'ngayBatDau', 'ngayKetThuc', 'gia'];
    public $timestamps = FALSE;

}
