<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    public $primaryKey = "sanp_id";
    protected $fillable = [
        'sanp_name',
        'price',
        'image',
       
    ];
}
