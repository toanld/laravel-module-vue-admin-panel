<?php

namespace Modules\Blog\Http\Controllers\Api;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Modules\Blog\Entities\Comments as Model;
use Illuminate\Support\Facades\Validator;

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
     * 
     * @return 
     */
    public function store(Request $request)
    {
        $success = 1;
        $data = [];
        $message = '';
        $validator = Validator::make($request->all(), [
            'post_id' => 'required|integer',
            'parent_id' => 'required|integer',
            'content' => 'required|string'
        ]);
        if ($validator->fails()) {
            $message = $validator->errors()->toArray();
            $success = 0;
        } else {
            $data = (new Model)->fill($request->all());
            $data->user_id = Auth::user()->id;
            $data->status = 1;
            if (! $data->post) {
                $message = 'Post id is error';
                $success = 0;
            } else {
                $data->save();
                $data->post->increment('comments');
            }
            
        }
        
        return json_encode([
            'success' => $success, 
            'data' => $data, 
            'message' => $message,
        ]);
    }

    
}
