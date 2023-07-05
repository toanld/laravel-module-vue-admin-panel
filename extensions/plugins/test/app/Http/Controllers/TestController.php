<?php

namespace Plugins\Test\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Fresns\Test\Models\Test;

class TestController extends Controller
{
    public function index(Request $request)
    {
        // code
        $configs = [];

        return view('Test::index', [
            'configs' => $configs,
        ]);
    }

    public function showSettingView(Request $request)
    {
        // code
        $itemKeys = [
            // 'item_key1',
            // 'item_key2',
        ];

        // $configs = Config::whereIn('item_key', $itemKeys)->where('item_tag', 'test')->get();
        $configs = [];

        return view('Test::setting', [
            'configs' => $configs,
        ]);
    }

    public function saveSetting(Request $request)
    {
        $request->validate([
            // 'item_key1' => 'required|url',
            // 'item_key2' => 'nullable|url',
        ]);

        $itemKeys = [
            // 'item_key1',
            // 'item_key2',
        ];

        // code
        // Config updateConfigs with $itemKeys and 'test'

        return redirect(route('test.setting'));
    }
}
