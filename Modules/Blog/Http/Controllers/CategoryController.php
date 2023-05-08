<?php

namespace Modules\Blog\Http\Controllers;

use BalajiDharma\LaravelMenu\Models\Menu;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use Modules\Blog\Entities\Blog;
use Modules\Blog\Entities\Category;

class CategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:blog list', ['only' => ['index']]);
        $this->middleware('can:blog create', ['only' => ['create', 'store']]);
        $this->middleware('can:blog edit', ['only' => ['edit', 'update']]);
        $this->middleware('can:blog delete', ['only' => ['destroy']]);
    }
    public function getData2(){
        sleep(10);
        $data2 = Blog::orderBy('id','ASC')->paginate(30);
        return $data2;
    }

    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {

        $items = (new Category())->toTree(0);

        return Inertia::module('blog::Categories/Index', [
            'menu' => [],
            'items' => $items,
            'can' => [
                'create' => Auth::user()->can('menu.item create'),
                'edit' => Auth::user()->can('menu.item edit'),
                'delete' => Auth::user()->can('menu.item delete'),
            ]
        ]);
    }



    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        $item_options = Category::selectOptions(0);
        return Inertia::module('blog::Categories/Create',[
            'item_options' => $item_options
        ]);
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255'
        ]);
        $blog = new Category();
        $blog->name = $request->name;
        $blog->parent_id = $request->parent_id;
        $blog->weight = (int)$request->weight;
        $blog->description = $request->description;
        $blog->enabled = $request->enabled;
        $blog->save();
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
        $data = Category::find($id);
        return Inertia::module('blog::Categories/Edit', [
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
        $data = Category::find($id);
        if($data){
            $data->name = $request->input('name');
            $data->description = $request->input('description');
            $data->save();
        }
        return redirect()->route('blog.categories.index')
            ->with('message', 'Category updated successfully.');
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
