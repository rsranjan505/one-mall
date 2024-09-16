<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Attribute extends Model
{
    use HasFactory,SoftDeletes;

    protected $guarded = [];
    protected $fillable = ['name', 'type','attribute_type', 'default_value', 'is_active'];
    protected $hidden = ['created_at', 'updated_at, deleted_at'];
}
