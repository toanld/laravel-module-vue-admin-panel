<?php

namespace Modules\Test\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Modules\Test\Entities\ModelExample as Test;
use Inertia\Inertia;

class TestController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:test list', ['only' => ['index']]);
        $this->middleware('can:test create', ['only' => ['create', 'store']]);
        $this->middleware('can:test edit', ['only' => ['edit', 'update']]);
        $this->middleware('can:test delete', ['only' => ['destroy']]);
    }
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {

        $data = Test::orderBy('id','DESC')->paginate(30);
        return Inertia::module('test::Index', [
            'datas' => $data,
            'filters' => request()->all('search'),
            'can' => [
                'create' => Auth::user()->can('test create'),
                'edit' => Auth::user()->can('test edit'),
                'delete' => Auth::user()->can('test delete'),
                'manage' => Auth::user()->can('test manage')
            ]
        ]);
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return Inertia::module('test::Create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(Request $request)
        {
            $request->validate([
                'name' => 'required|max:255',
                'description' => 'max:255'
            ]);
            $m = new Test();
            $m->name = $request->name;
            $m->description = $request->description;
            $m->save();
            return redirect()->route('test.index')
                ->with('message', 'Test created successfully.');
        }


    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        $data = Test::find($id);
        return Inertia::module('test::Edit', [
            'data' => $data,
        ]);
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(Request $request, $id)
    {
        $request->validate([
                        'name' => 'required|max:255',
                        'description' => 'max:255'
                    ]);
        $data = Test::find($id);
        if($data){
            $data->name = $request->input('name');
            $data->description = $request->input('description');
            $data->save();
        }
        return redirect()->route('test.index')
            ->with('message', 'Test updated successfully.');
        //
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        Test::destroy($id);
        return redirect()->route('test.index')
            ->with('message', __('Test deleted successfully'));
        //
    }
}
