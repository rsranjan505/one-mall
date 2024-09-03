<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $guarded = [];
    protected $fillable = ['name', 'slug', 'description', 'parent_id', 'is_active'];
    protected $hidden = ['created_at', 'updated_at'];

    public function parent()
    {
        return $this->belongsTo(self::class);
    }

    public function image()
    {
        return $this->morphOne(AssetFile::class, 'pictureable','model_type', 'model_id');
    }
}
