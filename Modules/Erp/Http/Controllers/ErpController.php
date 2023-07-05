<?php

namespace Modules\Erp\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Modules\Erp\Entities\ModelExample as Erp;
use Inertia\Inertia;

class ErpController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:erp list', ['only' => ['index']]);
        $this->middleware('can:erp create', ['only' => ['create', 'store']]);
        $this->middleware('can:erp edit', ['only' => ['edit', 'update']]);
        $this->middleware('can:erp delete', ['only' => ['destroy']]);
    }
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {

        $data = Erp::orderBy('id','DESC')->paginate(30);
        return Inertia::module('erp::Index', [
            //'datas' => Inertia::lazy(fn () =>  $data),
            'datas' => $data,
            'filters' => request()->all('search'),
            'can' => [
                'create' => Auth::user()->can('erp create'),
                'edit' => Auth::user()->can('erp edit'),
                'delete' => Auth::user()->can('erp delete'),
                'manage' => Auth::user()->can('erp manage')
            ]
        ]);
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return Inertia::module('erp::Create');
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
            $m = new Erp();
            $m->name = $request->name;
            $m->description = $request->description;
            $m->save();
            return redirect()->route('erp.index')
                ->with('message', 'Erp created successfully.');
        }


    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        $data = Erp::find($id);
        return Inertia::module('erp::Edit', [
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
        $data = Erp::find($id);
        if($data){
            $data->name = $request->input('name');
            $data->description = $request->input('description');
            $data->save();
        }
        return redirect()->route('erp.index')
            ->with('message', 'Erp updated successfully.');
        //
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        Erp::destroy($id);
        return redirect()->route('erp.index')
            ->with('message', __('Erp deleted successfully'));
        //
    }
}
