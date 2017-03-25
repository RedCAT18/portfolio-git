<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Libraries\AjaxResponse;
use App\Post;
use App\Image;

class Imagecontroller extends Controller
{
    //
    public function store(Request $request){
//        dd($request);
        $role = [
            'filename' =>'required|max:100',
        ];

        $validator = \Validator::make($request->all(), $role);

        if($validator->fails()){
            return ('alert("Please upload file properly.")');
        } // 오류 발생 시 에러 메세지 출력

        $imagePath = '/assets/images/uploads';

        $image = new Image();



    }
}
