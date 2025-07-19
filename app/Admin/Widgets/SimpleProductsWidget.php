<?php

namespace App\Admin\Widgets;

use App\Models\Product;

class SimpleProductsWidget
{
    /**
     * Get the count of products
     */
    public function getCount()
    {
        return Product::count();
    }

    /**
     * Get widget data
     */
    public function getData()
    {
        return [
            'count' => $this->getCount(),
            'title' => 'Products',
            'icon' => 'shopping-bag',
            'color' => 'primary',
        ];
    }
} 