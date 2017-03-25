<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Libraries\AjaxResponse;
use App\Category;
use App\Post;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data['categories'] = Category::all();

        return $data['categories']->toArray();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $role = [
            'name' => 'required|unique:categories|max:20',
        ];

        $validator = \Validator::make($request->all(), $role); //Controller에서 상속

        if ($validator->fails()) {
            $data['categories'] = Category::all();

            return $data['categories']->toArray();
        }

        if($request->id){
            $category = Category::findOrFail($request->id);
        } else {
            $category = new Category();
        }
//        dd($category);
        $category->name = $request->name;
        $category->save();

        $posts = Post::all();
        $categories = Category::all();
        $rsp = new AjaxResponse();

        $data['html'] = \View::make('admin.post')->with('posts',$posts)->with('categories',$categories)->render(); //make : memory에 올린다.

//        dd($profile);
        $rsp-> success = 1; //property of AjaxResponse()
        $rsp-> data = $data;

        return $rsp->toArray();
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function destroy($id)
    {
        $category = Category::findOrFail($id);
        $category->delete();

        $posts = Post::all();
        $categories = Category::all();
        $rsp = new AjaxResponse();

        $data['html'] = \View::make('admin.post')->with('posts',$posts)->with('categories',$categories)->render(); //make : memory에 올린다.

//        dd($profile);
        $rsp-> success = 1; //property of AjaxResponse()
        $rsp-> data = $data;

        return $rsp->toArray();
    }
}
