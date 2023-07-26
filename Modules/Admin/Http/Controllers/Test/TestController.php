<?php

namespace Modules\Admin\Http\Controllers\Test;

use Modules\Admin\Http\Controllers\Controller;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Modules\Admin\Entities\ModelExample as Admin;
use Inertia\Inertia;

class TestController extends Controller
{
    public function __construct()
    {
        $this->load();
        $this->middleware('can:admin list', ['only' => ['index']]);
        $this->middleware('can:admin create', ['only' => ['create', 'store']]);
        $this->middleware('can:admin edit', ['only' => ['edit', 'update']]);
        $this->middleware('can:admin delete', ['only' => ['destroy']]);
    }
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function test1()
    {
        return Inertia::module('admin::Test/Test1');
    }
    public function testsubmit(Request $request){
        $request->validate([
            'username' => ['required', 'max:50'],
            'email' => ['required', 'max:50', 'email'],
        ]);
        return ['aaa'];
    }

}
