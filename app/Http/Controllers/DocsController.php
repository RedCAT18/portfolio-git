<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class DocsController extends Controller
{
    //이 클래스 안에서만 유효함.
    protected $docs;

    public function __construct(\App\Documentation$docs) { //생성자
        //모델 자체를 파라메터로 사용 : $docs가 클래스 내로 들어오지 않을 경우 함수 자체가 실행되지 않음.
        $this -> docs = $docs;
    }

    public function show($file=null){
        //캐시로 파일을 처음 로딩할 시, 캐시 저장소에 미리 저장하고 변경사항이 없을 시에 바로 불러오게 한다.
//        $index = \Cache::remember('docs.index', 120, function(){
//            return markdown($this->docs->get());//저장된 것이 있을 시 그것을 불러온다.
//        });

        $content = \Cache::remember("docs.{$file}", 120, function() use($file) {
                return markdown($this->docs->get($file ?:'installation.md'));
         });
        return view('resume', compact('index','content'));
   }
}
