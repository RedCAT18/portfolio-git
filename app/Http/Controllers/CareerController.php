<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Libraries\AjaxResponse;
use App\Career;

class CareerController extends Controller
{
    //
    public function index(){
        $careers = Career::all();
        $rsp = new AjaxResponse();

        $data['html'] = \View::make('admin.career')->with('careers', $careers)->render(); //make : memory에 올린다.

        $rsp-> success = 1; //property of AjaxResponse()
        $rsp-> data = $data;

        return $rsp->toArray();
    }

    public function edit($id){
//        dd($id);
        $data['career'] = Career::findOrFail($id);

        return $data['career']->toArray();
    }

    public function store(Request $request)
    {
        $role = [
            'name' => 'required|max:20',
            'position'  => 'required|max:20',
            'period'  => 'required|max:20',
        ];

        $validator = \Validator::make($request->all(), $role); //Controller에서 상속

        if($validator->fails()){
            $careers = Career::all();
            $rsp = new AjaxResponse();

            $data['html'] = \View::make('admin.career')->with('careers', $careers)->render(); //make : memory에 올린다.

            $rsp-> success = 1; //property of AjaxResponse()
            $rsp-> data = $data;

            return $rsp->toArray();
        }

        if($request->id){
            $career = Career::findOrFail($request->id);
        } else {
            $career = new Career();
        }

        $career->name = $request->name;
        $career->position = $request->position;
        $career->period = $request->period;
        $career->description = $request->desc;
        $career->save();

        $careers = Career::all();
        $rsp = new AjaxResponse();

        $data['html'] = \View::make('admin.career')->with('careers', $careers)->render(); //make : memory에 올린다.

        $rsp-> success = 1; //property of AjaxResponse()
        $rsp-> data = $data;

        return $rsp->toArray();

    }

    public function destroy($id) {
        $career = Career::findOrFail($id);
        $career -> delete();

        $careers = Career::all();
        $rsp = new AjaxResponse();

        $data['html'] = \View::make('admin.career')->with('careers', $careers)->render(); //make : memory에 올린다.

        $rsp-> success = 1; //property of AjaxResponse()
        $rsp-> data = $data;

        return $rsp->toArray();
    }

}
