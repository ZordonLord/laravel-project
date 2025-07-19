<?php

namespace App\Admin\Widgets;

use App\Models\Category;

class SimpleCategoriesWidget
{
    /**
     * Get the count of categories
     */
    public function getCount()
    {
        return Category::count();
    }

    /**
     * Get widget data
     */
    public function getData()
    {
        return [
            'count' => $this->getCount(),
            'title' => 'Categories',
            'icon' => 'folder',
            'color' => 'success',
        ];
    }
} 