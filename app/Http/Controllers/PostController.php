<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Libraries\AjaxResponse;
use App\Post;
use App\Tag;
use App\Category;
use App\Reply;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all();
        $categories = Category::all(); //for modal
//        dd($categories);
        $rsp = new AjaxResponse();

        $data['html'] = \View::make('admin.post')->with('posts',$posts)->with('categories',$categories)->render();

        $rsp-> success = 1; //property of AjaxResponse()
        $rsp-> data = $data;

        return $rsp->toArray();
    }

    public function create() {

        $categories = Category::all();
        $rsp = new AjaxResponse();

        $data['html'] = \View::make('admin.create')->with('categories',$categories)->render();

        $rsp->success = 1;
        $rsp->data = $data;

        return $rsp->toArray();
    }

    public function store(Request $request) {
        dd($request);
        if($request->id){
            $post = Post::findOrFail($request->id);
        } else {
            $post = new Post();
        }

        $post->title = $request->title;
        $post->description = $request->description;
        $post->category_id = $request->category;
        $post->save();


        $categories = Category::all();
        $post = Post::all();
        $rsp = new AjaxResponse();

        $data['html'] = \View::make('admin.post')->with('posts',$posts)->with('categories',$categories)->render();

        $rsp-> success = 1;
        $rsp-> data = $data;

        return $rsp->toArray();
    }

    public function edit($id) {
        $data['post'] = Post::findOrFail($id);
        $categories = Category::all();

        $rsp = new AjaxResponse();

        $data['html'] = \View::make('admin.create')->with('categories',$categories)->render();

        $rsp->success = 1;
        $rsp->data = $data;
//        dd($rsp);
        return $rsp->toArray();

    }
}
