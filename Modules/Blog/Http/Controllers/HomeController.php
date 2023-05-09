<?php

namespace Modules\Blog\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Modules\Blog\Entities\Blog;
use Inertia\Inertia;
use Modules\Blog\Entities\Category;
use Modules\Blog\Entities\Tags;

class HomeController extends Controller
{
    public function __construct()
    {
    }
    /**
     * Display a listing of the resource.
     * @return 
     */
    public function index()
    {
        $data = [];
        $data['home_banner'] = Blog::select('posts.*', 'blog_categories.name as category_name', 'users.name as user_name')
            ->join('blog_categories', 'posts.category_id', '=', 'blog_categories.id')
            ->join('users', 'posts.user_id', '=', 'users.id')
            ->orderBy('posts.id', 'desc')
            ->limit(6)->get();
        
        $data['recent_posts'] = Blog::orderBy('posts.id', 'desc')
            ->limit(3)->get();
        $data['categoryRoot'] = (new Category())->toTree(0);
        $data['tags'] = Tags::limit(10)->get();
        return view('blog::index', $data);
    }

    public function detail(Request $request)
    {
        $data = [];
        $data['data'] = Blog::select('posts.*', 'blog_categories.name as category_name', 'users.name as user_name')
            ->join('blog_categories', 'posts.category_id', '=', 'blog_categories.id')
            ->join('users', 'posts.user_id', '=', 'users.id')
            ->where('posts.id', $request->id)
            ->first();
        
        $data['recent_posts'] = Blog::orderBy('posts.id', 'desc')
            ->limit(3)->get();
        $data['categoryRoot'] = (new Category())->toTree(0);
        $data['tags'] = Tags::limit(10)->get();
        return view('blog::detail', $data);
    }

    public function about()
    {

        return view('blog::about');
    }

    public function contact()
    {

        return view('blog::contact');
    }
}
