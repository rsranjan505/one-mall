<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shipping extends Model
{
    use HasFactory;
    protected $fillable = [
        'shipping_type',
        'charges',
    ];
    protected $hidden = ['created_at', 'updated_at'];
}
