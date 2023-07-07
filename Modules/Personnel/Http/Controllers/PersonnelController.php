<?php

namespace Modules\Personnel\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Modules\Personnel\Entities\ModelExample as Personnel;
use Inertia\Inertia;

class PersonnelController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:personnel list', ['only' => ['index']]);
        $this->middleware('can:personnel create', ['only' => ['create', 'store']]);
        $this->middleware('can:personnel edit', ['only' => ['edit', 'update']]);
        $this->middleware('can:personnel delete', ['only' => ['destroy']]);
    }
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {

        $data = Personnel::orderBy('id','DESC')->paginate(30);
        return Inertia::module('personnel::Index', [
            //'datas' => Inertia::lazy(fn () =>  $data),
            'datas' => $data,
            'filters' => request()->all('search'),
            'can' => [
                'create' => Auth::user()->can('personnel create'),
                'edit' => Auth::user()->can('personnel edit'),
                'delete' => Auth::user()->can('personnel delete'),
                'manage' => Auth::user()->can('personnel manage')
            ]
        ]);
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return Inertia::module('personnel::Create');
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
            $m = new Personnel();
            $m->name = $request->name;
            $m->description = $request->description;
            $m->save();
            return redirect()->route('personnel.index')
                ->with('message', 'Personnel created successfully.');
        }


    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        $data = Personnel::find($id);
        return Inertia::module('personnel::Edit', [
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
        $data = Personnel::find($id);
        if($data){
            $data->name = $request->input('name');
            $data->description = $request->input('description');
            $data->save();
        }
        return redirect()->route('personnel.index')
            ->with('message', 'Personnel updated successfully.');
        //
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        Personnel::destroy($id);
        return redirect()->route('personnel.index')
            ->with('message', __('Personnel deleted successfully'));
        //
    }
}
