<?php

namespace App\Services;

use App\Models\Category;

class CategoryService extends BaseService
{
    /**
     * Create a new class instance.
     */
    public function __construct()
    {
        //
    }

    public function getAllCategories()
    {
        return Category::with('parent','children','image')->get();
    }
}
