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
use Modules\Blog\Entities\Tags;
use Modules\Blog\Entities\PostTags;
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
            'description' => 'required',
            'category_id' => 'required'
        ]);

        $tagId = [];
        if ($request->tags) {
            foreach ($request->tags as $key => $value) {
                $tag = Tags::where('slug', Str::slug($value))->first();
                if ($tag) {
                    $tagId[] = $tag->id;
                    // dd(Tags::where('id', $tag->id)->withCount('post')->get()->toArray());
                    $tag->increment('count');
                } else {
                    $tag = Tags::create([
                        'name' => $value,
                        'slug' => Str::slug($value),
                        'count' => 1,
                        'status' => 1
                    ]);
                    $tagId[] = $tag->id;
                }
            }
            $tagId = array_unique($tagId);
        }

        $blog = new Blog();
        $blog->title = $request->title;
        $blog->slug = Str::slug($request->title);
        $blog->user_id = Auth::user()->id;
        $blog->teaser = $request->teaser;
        $blog->description = $request->description;
        $blog->category_id = $request->category_id;
        $blog->tag_id = implode(',', $tagId);
        $blog->status = $request->status ? 1 : 0;
        $blog->publish_date = $request->publish_date;
        if ($request->file('image')) {
            $path = $request->file('image')->store('public');
            $name = str_replace('public/', '', $path);
            $blog->image = $name;
        }

        $blog->save();

        $blog->tags()->syncWithPivotValues($tagId, ['category_id' => $request->category_id]);

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
        $tags = Tags::whereIn('id', explode(',', $data->tag_id))->get()->pluck('name')->all();
        // dd($tags);
        $item_options = Category::selectOptions(0);
        return Inertia::module('blog::Posts/Edit', [
            'data' => $data,
            'item_options' => $item_options,
            'tags' => $tags
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
            'title' => 'required|max:255',
            'description' => 'required',
            'category_id' => 'required'
        ]);
        $data = Blog::find($id);

        $tagId = [];
        if ($request->tags) {
            foreach ($request->tags as $key => $value) {
                $tag = Tags::where('slug', Str::slug($value))->first();
                if ($tag) {
                    $tagId[] = $tag->id;
                    // dd(Tags::where('id', $tag->id)->withCount('post')->get()->toArray());
                    $dataTagId = explode(',', $data->tag_id);
                    if (array_search($tag->id, $dataTagId) === false) {
                        $tag->increment('count');
                    }
                } else {
                    $tag = Tags::create([
                        'name' => $value,
                        'slug' => Str::slug($value),
                        'count' => 1,
                        'status' => 1
                    ]);
                    $tagId[] = $tag->id;
                }
            }
            $tagId = array_unique($tagId);
        }


        if($data){
            if ($request->file('image')) {
                $path = $request->file('image')->store('public');
                $name = str_replace('public/', '', $path);
                $data->image = $name;
            }
            $data->title = $request->title;
            $data->slug = Str::slug($request->title);
            $data->user_id = Auth::user()->id;
            $data->teaser = $request->teaser;
            $data->description = $request->description;
            $data->category_id = $request->category_id;
            $data->status = 0;
            $data->tag_id = implode(',', $tagId);
            $data->publish_date = $request->publish_date;
            $data->save();
            $data->tags()->syncWithPivotValues($tagId, ['category_id' => $request->category_id]);
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
