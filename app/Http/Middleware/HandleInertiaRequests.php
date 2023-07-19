<?php

namespace App\Http\Middleware;

use App\Models\Menu;
use Illuminate\Http\Request;
use Inertia\Middleware;
use Tightenco\Ziggy\Ziggy;

class HandleInertiaRequests extends Middleware
{
    /**
     * The root template that is loaded on the first page visit.
     *
     * @var string
     */
    protected $rootView = 'erp::layouts.app';

    /**
     * Determine the current asset version.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */
    public function version(Request $request)
    {
        return parent::version($request);
    }

    public function rootView(Request $request)
    {
        return myapp()->rootViewInetia();
    }

    /**
     * Define the props that are shared by default.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function share(Request $request)
    {
        $menu = Menu::getMenuTree('admin');
        $prefix = substr($request->route()->getPrefix(),1);
        $arr_menu = [];
        $arr_menu_top = [];
        $menu_module = config(strtolower($prefix) . '.menu');
        $menu_top = config(strtolower($prefix) . '.menutop');
        $menu_app = config('config.menu');

        if(!empty($menu_module)){
            $arr_menu = $menu_module;
        }

        if(!empty($menu_top)){
            $arr_menu_top = $menu_top;
        }

        return array_merge(parent::share($request), [
            'auth' => [
                'user' => $request->user(),
            ],
            'ziggy' => function () use ($request) {
                return array_merge((new Ziggy)->toArray(), [
                    'location' => $request->url(),
                ]);
            },
            'flash' => [
                'message' => fn () => $request->session()->get('message'),
            ],
            'navigation' => [
                'menu' => $menu,
                'menu_module' => $arr_menu,
                'menu_top' => $arr_menu_top,
                "menu_app" => $menu_app
            ]
        ]);
    }
}
