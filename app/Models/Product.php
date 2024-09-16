<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $guarded = [];
    protected $fillable = ['name', 'slug','sku','barcode','short_description', 'description','long_description', 'price','sale_price', 'category','sub_category','collection','status','type','tags','is_featured','is_popular','is_trending','iS_latest','is_top_selling', 'is_active'];
    protected $hidden = ['created_at', 'updated_at'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function subCategory()
    {
        return $this->belongsTo(Category::class,'sub_category');
    }


    public function image()
    {
        return $this->morphOne(AssetFile::class, 'pictureable','model_type', 'model_id');
    }
}
