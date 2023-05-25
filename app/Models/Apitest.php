<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Apitest extends Model
{
    use HasFactory;
    protected $fillable = [
       'product',
       'price',
       'des',
       'brand',
       'category'
       
        ];
}
