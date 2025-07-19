<?php

namespace App\Admin\Widgets;

use App\Models\Category;
use Illuminate\Support\Facades\Auth;
use TCG\Voyager\Widgets\BaseDimmer;

class CategoriesWidget extends BaseDimmer
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
        $count = Category::count();
        $string = trans_choice('voyager::dimmer.category', $count);

        return view('voyager::dimmer', array_merge($this->config, [
            'icon'   => 'voyager-categories',
            'title'  => "{$count} {$string}",
            'text'   => __('voyager::dimmer.category_text', ['count' => $count, 'string' => strtolower($string)]),
            'button' => [
                'text' => __('voyager::dimmer.category_link_text'),
                'link' => route('voyager.categories.index'),
            ],
            'image' => voyager_asset('images/widget-backgrounds/02.jpg'),
        ]));
    }

    /**
     * Determine if the widget should be displayed.
     *
     * @return bool
     */
    public function shouldBeDisplayed()
    {
        return Auth::user()->can('browse', app(Category::class));
    }
} 