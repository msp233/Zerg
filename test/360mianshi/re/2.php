<?php
/**
 * Created by PhpStorm.
 * User: v_shipmao
 * Date: 2018/3/20
 * Time: 14:31
 */
$str = '中华人民共和国';
$pattern = '/[\x{4e00}-\x{9fa5}]/u';
preg_match_all($pattern,$str,$match);
var_dump($match);


echo "<hr/>匹配139开头的手机号</hr>";
$str = '13912341234';
preg_match('/^139\d{8}$/',$str,$match);
var_dump($match);