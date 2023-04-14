<?php

namespace Modules\Blog\Http\Controllers;

use BalajiDharma\LaravelMenu\Models\Menu;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;
use Modules\Blog\Entities\Blog;
use Modules\Blog\Entities\Category;
use Illuminate\Support\Str;

class BlogController extends Controller
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
        $data = Blog::orderBy('id','DESC')->paginate(30);

        return Inertia::module('blog::Posts/Index', [
            'datas' => Inertia::lazy(fn () =>  $data),
            //'datas' => $data,
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
        $item_options = Category::selectOptions(0);
        return Inertia::module('blog::Posts/Create', [
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
            'title' => 'required|max:255',
            'content' => 'required',
            'category_id' => 'required'
        ]);
        $blog = new Blog();
        $blog->title = $request->title;
        $blog->slug = Str::slug($request->title);
        $blog->user_id = Auth::user()->id;
        $blog->content = $request->content;
        $blog->category_id = $request->category_id;
        $blog->status = $request->status ? 1 : 0;
        $blog->publish_date = $request->publish_date;
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
        $data = Blog::find($id);
        $item_options = Category::selectOptions(0);
        return Inertia::module('blog::Posts/Edit', [
            'data' => $data,
            'item_options' => $item_options
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
