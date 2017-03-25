<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Libraries\AjaxResponse;
use App\Post;
use App\Post_tag;
use App\Tag;

class GalleryController extends Controller
{
    //
    public function index() {

        $rsp = new AjaxResponse();

        $data['html'] = \View::make('admin.gallery')->render(); //make : memory에 올린다.

//        dd($profile);
        $rsp-> success = 1; //property of AjaxResponse()
        $rsp-> data = $data;

        return $rsp->toArray();
    }
}
