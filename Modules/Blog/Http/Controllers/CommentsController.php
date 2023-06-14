<?php

namespace Modules\Blog\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Modules\Blog\Entities\Comments as Model;
use Inertia\Inertia;

class CommentsController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:blog list', ['only' => ['index']]);
        $this->middleware('can:blog create', ['only' => ['create', 'store']]);
        $this->middleware('can:blog edit', ['only' => ['edit', 'update']]);
        $this->middleware('can:blog delete', ['only' => ['destroy']]);
    }
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {dd(1);

        $data = Blog::orderBy('id','DESC')->paginate(30);
        return Inertia::module('blog::Index', [
            //'datas' => Inertia::lazy(fn () =>  $data),
            'datas' => $data,
            'filters' => request()->all('search'),
            'can' => [
                'create' => Auth::user()->can('blog create'),
                'edit' => Auth::user()->can('blog edit'),
                'delete' => Auth::user()->can('blog delete'),
                'manage' => Auth::user()->can('blog manage')
            ]
        ]);
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return Inertia::module('blog::Create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(Request $request)
        {
            $request->validate([
                'post_id' => 'required|integer',
                'user_id' => 'required|integer',
                'parent_id' => 'required|integer',
                'content' => 'string'
            ]);
            $m = new Model();
            $m->name = $request->name;
            $m->description = $request->description;
            $m->save();
            return redirect()->route('blog.index')
                ->with('message', 'Blog created successfully.');
        }


    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        $data = Blog::find($id);
        return Inertia::module('blog::Edit', [
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
        $data = Blog::find($id);
        if($data){
            $data->name = $request->input('name');
            $data->description = $request->input('description');
            $data->save();
        }
        return redirect()->route('blog.index')
            ->with('message', 'Blog updated successfully.');
        //
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        Blog::destroy($id);
        return redirect()->route('blog.index')
            ->with('message', __('Blog deleted successfully'));
        //
    }
}
