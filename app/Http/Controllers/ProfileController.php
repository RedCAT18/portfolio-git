<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Libraries\AjaxResponse;
use App\Profile;

class ProfileController extends Controller
{
    //
    public function index(){
        $profile = Profile::all(); // 대체 얘는 어찌해야 한단 말이오;;;;
        $rsp = new AjaxResponse();

        $data['html'] = \View::make('admin.profile')->with('profile', $profile)->render(); //make : memory에 올린다.

//        dd($profile);
        $rsp-> success = 1; //property of AjaxResponse()
        $rsp-> data = $data;

        return $rsp->toArray();
    }

    public function store(Request $request)
    {
//
        $profile = Profile::findOrFail(1);

        $profile->name = $request->name;
        $profile->about = $request->about;
        $profile->phone = $request->phone;
        $profile->email = $request->email;
        $profile->myTwitter = $request->myTwitter;
        $profile->myFacebook = $request->myFacebook;
        $profile->myInstagram = $request->myInstagram;
        $profile->myTumblr = $request->myTumblr;

        $profile->save();

        $profile = Profile::all();
        $rsp = new AjaxResponse();

        $data['html'] = \View::make('admin.profile')->with('profile', $profile)->render(); //make : memory에 올린다.


        $rsp-> success = 1; //property of AjaxResponse()
        $rsp-> data = $data;

        return $rsp->toArray();
    }
}
