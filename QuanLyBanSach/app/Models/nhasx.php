<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class nhasx extends Model
{
    use HasFactory;
    public $primaryKey = "nsx_id";
    protected $table = 'nhasx';
    protected $fillable = ['nsx_id', 'nsx_name', 'diaChi', 'sdt'];
    public $timestamps = FALSE;
}
