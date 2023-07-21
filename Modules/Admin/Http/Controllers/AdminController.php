<?php

namespace Modules\Admin\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Modules\Admin\Entities\ModelExample as Admin;
use Inertia\Inertia;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->load();
        //$this->middleware('checkPermission:super-admin,editor');
        $this->middleware('can:admin list', ['only' => ['index']]);
        $this->middleware('can:admin create', ['only' => ['create', 'store']]);
        $this->middleware('can:admin edit', ['only' => ['edit', 'update']]);
        $this->middleware('can:admin delete', ['only' => ['destroy']]);
    }
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function Dashboard()
    {

        //dd($user->hasRole(['super-admin', 'editor']));
        return Inertia::module('admin::Dashboard');
        $data = Admin::orderBy('id','DESC')->paginate(30);
        return Inertia::module('admin::Index', [
            //'datas' => Inertia::lazy(fn () =>  $data),
            'datas' => $data,
            'filters' => request()->all('search'),
            'can' => [
                'create' => Auth::user()->can('admin create'),
                'edit' => Auth::user()->can('admin edit'),
                'delete' => Auth::user()->can('admin delete'),
                'manage' => Auth::user()->can('admin manage')
            ]
        ]);
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return Inertia::module('admin::Create');
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
            $m = new Admin();
            $m->name = $request->name;
            $m->description = $request->description;
            $m->save();
            return redirect()->route('admin.index')
                ->with('message', 'Admin created successfully.');
        }


    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        $data = Admin::find($id);
        return Inertia::module('admin::Edit', [
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
        $data = Admin::find($id);
        if($data){
            $data->name = $request->input('name');
            $data->description = $request->input('description');
            $data->save();
        }
        return redirect()->route('admin.index')
            ->with('message', 'Admin updated successfully.');
        //
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        Admin::destroy($id);
        return redirect()->route('admin.index')
            ->with('message', __('Admin deleted successfully'));
        //
    }
}
