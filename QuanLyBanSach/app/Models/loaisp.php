<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class loaisp extends Model
{
    use HasFactory;
    public $primaryKey = "loai_id";
    protected $table = 'loaisp';
    protected $fillable = ['loai_id', 'loai_name', 'danhmuc_id'];
    public $timestamps = FALSE;
}
