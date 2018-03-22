<?php
/**
 * Created by PhpStorm.
 * User: v_shipmao
 * Date: 2018/3/19
 * Time: 10:10
 */
$a = 'haha';
/*常量及数据类型考察点*/
$str = 'a b c d e $a f g';
var_dump($str);
$str1 = "a b c d e '{$a}' f g";
var_dump($str1);