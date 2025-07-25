<?php

namespace App\Admin\Widgets;

use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use TCG\Voyager\Widgets\BaseDimmer;

class ProductsWidget extends BaseDimmer
{
    /**
     * The configuration array.
     *
     * @var array
     */
    protected $config = [];

    /**
     * Treat this method as a controller action.
     * Return view() or other content to display.
     */
    public function run()
    {
        $count = Product::count();
        $string = trans_choice('voyager::dimmer.product', $count);

        return view('voyager::dimmer', array_merge($this->config, [
            'icon'   => 'voyager-bag',
            'title'  => "{$count} {$string}",
            'text'   => __('voyager::dimmer.product_text', ['count' => $count, 'string' => strtolower($string)]),
            'button' => [
                'text' => __('voyager::dimmer.product_link_text'),
                'link' => route('voyager.products.index'),
            ],
            'image' => voyager_asset('images/widget-backgrounds/01.jpg'),
        ]));
    }

    /**
     * Determine if the widget should be displayed.
     *
     * @return bool
     */
    public function shouldBeDisplayed()
    {
        return Auth::user()->can('browse', app(Product::class));
    }
} 