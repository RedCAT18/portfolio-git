<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use File;

class Documentation extends Model
{

    public function get($file) {
        $content = File::get($this->path($file));
        return $content;
    }

    public function path($file) {
        $file = ends_with($file, '.md')? $file : $file.'.md'; // ? : 삼항연산자 구조
        $path = base_path('docs'.DIRECTORY_SEPARATOR.$file); // DIRECTORY_SEPERATOR는 윈도우 환경에서 역슬러시 사용을 위해 지정해줌.
        //base_path() : 프로젝트의 루트 디렉토리에 대한 절대 경로를 반환한다.

        if( ! File::exists($path)) { //파일이 존재하지 않을 시
            abort (404, 'There is no file.'); //에러 메세지 발송
        }
        return $path;
    }
}
