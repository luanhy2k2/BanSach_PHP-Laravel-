<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class nguoidung extends Model
{
    use HasFactory;
     public $primaryKey = "maNguoiDung";
    protected $table = 'nguoidung';
}
