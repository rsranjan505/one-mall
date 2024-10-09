<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coupan extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $fillable = ['code', 'type', 'value','min_purchase_amount','used','from_date', 'to_date','is_active'];
    protected $hidden = ['created_at', 'updated_at'];
}
