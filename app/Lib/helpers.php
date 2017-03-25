<?php
/**
 * Created by PhpStorm.
 * User: RedCAT
 * Date: 2017-03-23
 * Time: 오전 12:04
 */

if(! function_exists('markdown')){ //동일한 이름의 markdown 함수가 있는지 판별
    function markdown($text = null){ //존재하지 않을 경우 실행 (충돌방지)
        return app(ParsedownExtra::class)->text($text);
    }
}