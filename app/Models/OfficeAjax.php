<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OfficeAjax extends Model
{
    use HasFactory;
    protected $fillable = [
        'name','des','price', 'qnt', 'status'
    ];
}
