<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Libraries\AjaxResponse;
use App\Post;
use App\Category;
use App\Reply;

class BlogController extends Controller
{
    public function index() {

        $rsp = new AjaxResponse();

        $data['html'] = \View::make('admin.blog')->render(); //make : memory에 올린다.

        //        dd($profile);
        $rsp-> success = 1; //property of AjaxResponse()
        $rsp-> data = $data;

        return $rsp->toArray();
    }
}

}
