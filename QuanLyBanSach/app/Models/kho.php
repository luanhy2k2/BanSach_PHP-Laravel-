<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kho extends Model
{
    use HasFactory;
    public $primaryKey = "maKho";
    protected $table = 'kho';
    protected $fillable = ['maKho', 'tenKho'];
    public $timestamps = FALSE;
}
