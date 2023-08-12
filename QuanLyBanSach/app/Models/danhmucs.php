<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class danhmucs extends Model
{
    use HasFactory;
    public $primaryKey = "danhmuc_id";
    protected $table = 'danhmucs';
    protected $fillable = ['danhmuc_id', 'danhmuc_name'];
    public $timestamps = FALSE;
   
}
