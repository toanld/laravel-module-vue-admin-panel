<?php

namespace Modules\Salon\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Modules\Salon\Entities\ModelExample as Salon;
use Inertia\Inertia;

class SalonController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:salon list', ['only' => ['index']]);
        $this->middleware('can:salon create', ['only' => ['create', 'store']]);
        $this->middleware('can:salon edit', ['only' => ['edit', 'update']]);
        $this->middleware('can:salon delete', ['only' => ['destroy']]);
    }
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {

        $data = Salon::orderBy('id','DESC')->paginate(30);
        return Inertia::module('salon::Index', [
            //'datas' => Inertia::lazy(fn () =>  $data),
            'datas' => $data,
            'filters' => request()->all('search'),
            'can' => [
                'create' => Auth::user()->can('salon create'),
                'edit' => Auth::user()->can('salon edit'),
                'delete' => Auth::user()->can('salon delete'),
                'manage' => Auth::user()->can('salon manage')
            ]
        ]);
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return Inertia::module('salon::Create');
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
            $m = new Salon();
            $m->name = $request->name;
            $m->description = $request->description;
            $m->save();
            return redirect()->route('salon.index')
                ->with('message', 'Salon created successfully.');
        }


    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        $data = Salon::find($id);
        return Inertia::module('salon::Edit', [
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
        $data = Salon::find($id);
        if($data){
            $data->name = $request->input('name');
            $data->description = $request->input('description');
            $data->save();
        }
        return redirect()->route('salon.index')
            ->with('message', 'Salon updated successfully.');
        //
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        Salon::destroy($id);
        return redirect()->route('salon.index')
            ->with('message', __('Salon deleted successfully'));
        //
    }
}
