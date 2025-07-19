<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Voyager Domain
    |--------------------------------------------------------------------------
    |
    | This is the subdomain where Voyager will be accessible from. If the
    | setting is null, Voyager will reside under the same domain as the
    | application. Otherwise, this value will serve as the subdomain.
    |
    */

    'domain' => env('VOYAGER_DOMAIN'),

    /*
    |--------------------------------------------------------------------------
    | Voyager Path
    |--------------------------------------------------------------------------
    |
    | This is the URI path where Voyager will be accessible from. Feel free
    | to change this path to anything you like. Note that the URI will not
    | affect the paths of the API.
    |
    */

    'path' => env('VOYAGER_PATH', 'admin'),

    /*
    |--------------------------------------------------------------------------
    | Voyager Route Middleware
    |--------------------------------------------------------------------------
    |
    | These middleware will be assigned to every Voyager route - giving you
    | the chance to add your own middleware to this stack or override any
    | of the existing middleware. Or, you can just stick with this stack.
    |
    */

    'middleware' => [
        'web',
        'admin.user',
    ],

    /*
    |--------------------------------------------------------------------------
    | Voyager Storage Config
    |--------------------------------------------------------------------------
    |
    | The following config options were in Voyager 1.0 and are now here for
    | the `voyager:install` command to use. `storage.disk` was never used
    | and had a default value of `public`, but I left it in since it could
    | be useful to someone. They are prefixed with 'storage.' to normalize
    | the config array key with the other config arrays.
    |
    */

    'storage' => [
        'disk' => env('FILESYSTEM_DISK', 'public'),
    ],

    /*
    |--------------------------------------------------------------------------
    | Database Config
    |--------------------------------------------------------------------------
    |
    | Here you can specify voyager database settings
    |
    */

    'database' => [
        'tables' => [
            'hidden' => ['migrations', 'data_rows', 'data_types', 'data_settings', 'sessions', 'password_resets', 'failed_jobs'],
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Multilingual configuration
    |--------------------------------------------------------------------------
    |
    | Here you can specify if you want Voyager to ship with support for
    | multilingual and what locales are enabled.
    |
    */

    'multilingual' => [
        'enabled' => false,
        'default' => 'en',
        'locales' => [
            'en',
            //'pt',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Dashboard config
    |--------------------------------------------------------------------------
    |
    | Here you can modify some aspects of your dashboard
    |
    */

    'dashboard' => [
        // Add custom list items to navbar's dropdown
        'navbar_items' => [
            'Profile' => [
                'route'      => 'voyager.profile',
                'classes'    => 'class-name-in-here',
                'icon_class' => 'voyager-person',
            ],
            'Home' => [
                'route'        => '/',
                'icon_class'   => 'voyager-home',
                'class'        => 'class-name-in-here',
                'target_blank' => true,
            ],
            'Logout' => [
                'route'      => 'voyager.logout',
                'icon_class' => 'voyager-power',
            ],
        ],

        'widgets' => [
            'TCG\\Voyager\\Widgets\\UserDimmer',
            'TCG\\Voyager\\Widgets\\PostDimmer',
            'TCG\\Voyager\\Widgets\\PageDimmer',
            \App\Admin\Widgets\ProductsWidget::class,
            \App\Admin\Widgets\CategoriesWidget::class,
        ],

    ],

    /*
    |--------------------------------------------------------------------------
    | Automatic Procedures
    |--------------------------------------------------------------------------
    |
    | When a change happens on Voyager, we can automate some routines.
    |
    */

    'bread' => [
        'add_menu_item' => true,
        'add_menu_items' => true,
        'add_bread' => true,
        'add_bread_for_page' => true,
    ],

    /*
    |--------------------------------------------------------------------------
    | UI Generic Config
    |--------------------------------------------------------------------------
    |
    | Here you change some of the Voyager UI settings.
    |
    */

    'primary_color' => '#22A7F0',

    'show_dev_tips' => true, // Show development tip "How To Use:" when Mouseover

    // Here you can specify additional assets you would like to be included in the master.blade
    'additional_css' => [
        //'css/custom.css',
    ],

    'additional_js' => [
        //'js/custom.js',
    ],

    'compass_in_production' => false,

    'show_compass_in_production' => false,

    /*
    |--------------------------------------------------------------------------
    | Controllers config
    |--------------------------------------------------------------------------
    |
    | Here you can specify voyager controller settings
    |
    */

    'controllers' => [
        'namespace' => 'TCG\\Voyager\\Http\\Controllers',
    ],

    /*
    |--------------------------------------------------------------------------
    | Models config
    |--------------------------------------------------------------------------
    |
    | Here you can specify default model namespace when creating BREAD.
    | Must include trailing backslashes. If not defined the default application
    | namespace will be used.
    |
    */

    'models' => [
        //'namespace' => 'App\\',
    ],

    /*
    |--------------------------------------------------------------------------
    | Path to the Voyager Assets
    |--------------------------------------------------------------------------
    |
    | Here you can specify the location of the voyager assets path
    |
    */

    'assets_path' => '/vendor/tcg/voyager/assets',

    /*
    |--------------------------------------------------------------------------
    | Storage Config
    |--------------------------------------------------------------------------
    |
    | Here you can specify attributes related to your application file system
    |
    */

    'storage' => [
        'disk' => env('FILESYSTEM_DISK', 'public'),
    ],

    /*
    |--------------------------------------------------------------------------
    | Database Config
    |--------------------------------------------------------------------------
    |
    | Here you can specify voyager database settings
    |
    */

    'database' => [
        'tables' => [
            'hidden' => ['migrations', 'data_rows', 'data_types', 'data_settings', 'sessions', 'password_resets', 'failed_jobs'],
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | The prefix you wish to assign to your routes, the base path
    | where Voyager will be accessible from.
    |
    | Note: It is recommended to use a trailing slash.
    |
    */

    'prefix' => env('VOYAGER_PREFIX', 'admin'),

    /*
    |--------------------------------------------------------------------------
    | Database table prefix
    |--------------------------------------------------------------------------
    |
    | Here you can specify the database table prefix for Voyager
    |
    */

    'table_prefix' => env('VOYAGER_TABLE_PREFIX', ''),

    /*
    |--------------------------------------------------------------------------
    | User Model
    |--------------------------------------------------------------------------
    |
    | This is the User model used by Voyager to create correct relations.
    | Update the User if it is in a different namespace.
    |
    */

    'user' => [
        'add_default_role_on_register' => true,
        'default_role'                 => 'user',
        'admin_permission'             => 'browse_admin',
        'namespace'                    => App\Models\User::class,
    ],

    /*
    |--------------------------------------------------------------------------
    | Guard
    |--------------------------------------------------------------------------
    |
    | This is the authentication guard used by Voyager to protect your
    | application. If you're using the default configuration, the guard
    | will be set to "web".
    |
    */

    'guard' => env('VOYAGER_GUARD', 'web'),

    /*
    |--------------------------------------------------------------------------
    | 2FA configuration
    |--------------------------------------------------------------------------
    |
    | Here you can specify the configuration for 2FA
    |
    */

    '2fa' => [
        'enabled' => env('VOYAGER_2FA_ENABLED', false),
    ],

    /*
    |--------------------------------------------------------------------------
    | Dynamic Relationships
    |--------------------------------------------------------------------------
    |
    | Here you can specify the dynamic relationships that should be re-hydrated
    | when the model is re-created from the database (typically when using
    | the "add" method on Eloquent model relationships).
    |
    */

    'dynamic_relationships' => [
        // If you have a BREAD for posts, you might want to re-hydrate the 'author' relationship
        // 'TCG\Voyager\Models\Post' => ['author'],
    ],

    /*
    |--------------------------------------------------------------------------
    | Exception Handler
    |--------------------------------------------------------------------------
    |
    | Here you can specify the exception handler class that should be used
    | when an error occurs. This allows you to create custom error pages.
    |
    */

    'exception_handler' => null,

    /*
    |--------------------------------------------------------------------------
    | Features
    |--------------------------------------------------------------------------
    |
    | Some of the features of Voyager are optional. You may disable the features
    | by removing them from this array. By removing the following feature, an
    | API route that displays all menus will not be generated.
    |
    */

    'features' => [
        'hooks' => true,
    ],

]; 