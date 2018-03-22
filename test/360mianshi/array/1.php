<?php
/**
 * Created by PhpStorm.
 * User: v_shipmao
 * Date: 2018/3/20
 * Time: 10:25
 */
$arr = ['a','c','b',1];
var_dump($arr);
$re = array_shift($arr);
var_dump($re);
var_dump($arr);

$re = array_unshift($arr,'abc',['bbb','ccc',123]);
var_dump($re);
var_dump($arr);

$re = shuffle($arr);
var_dump($re);
var_dump($arr);

echo '###############';
unset($re);
$re = array_rand($arr,2);
var_dump($re);
var_dump($arr);