<?php
/**
 * Created by PhpStorm.
 * User: v_shipmao
 * Date: 2018/3/20
 * Time: 17:15
 */
class Father{
    public function test(){

    }
}

Class Son extends Father{
    public function test(){
        parent::test();
    }
}

$str = 'Content-Type Accept  Origin  Cookie Cache_control User-Agent Referrer X-Forwarded-For Access-Control-Allow-Origin Last-Modified';
$arr = explode(' ',$str);
$str1 = join('、',$arr);

echo $str1;