<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Libraries\AjaxResponse;
use App\Profile;
use App\Career;

class ScreenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data['profile'] = Profile::all();
        $data['careers'] = Career::all();
//        dd($data);
        return view('index', $data);
    }

    public function work()
    {
        $rsp = new AjaxResponse();

        $data['html'] = \View::make('work')->render(); //make : memory에 올린다.

        $rsp-> success = 1; //property of AjaxResponse()
        $rsp-> data = $data;

        return $rsp->toArray();
    }

    public function blog()
    {
        $rsp = new AjaxResponse();

        $data['html'] = \View::make('blog')->render(); //make : memory에 올린다.

        $rsp-> success = 1; //property of AjaxResponse()
        $rsp-> data = $data;

        return $rsp->toArray();
    }

    public function contact()
    {
        $rsp = new AjaxResponse();

        $data['html'] = \View::make('contact')->render(); //make : memory에 올린다.

        $rsp-> success = 1; //property of AjaxResponse()
        $rsp-> data = $data;

        return $rsp->toArray();
    }
}
