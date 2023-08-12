<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tg extends Model
{
    use HasFactory;
    public $primaryKey = "tG_id";
    protected $table = 'tg';
    protected $fillable = ['tG_id', 'tG_name', 'tG_diaChi', 'sdt', 'email'];
    public $timestamps = FALSE;
}
