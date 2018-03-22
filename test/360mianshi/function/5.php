<?php
/**
 * Created by PhpStorm.
 * User: v_shipmao
 * Date: 2018/3/20
 * Time: 10:55
 */
$var1 = 5;
$var2 = 10;

function foo(&$my_var){
    global $var1;
    $var1 += 2;
    $var2 = 4;
    $my_var += 3;
    return $var2;
}

$my_var = 5;
var_dump(foo($my_var));  //$var1 = 7; 函数体外$var2 = 10; 局部$var2 = 4;  $my_var = 5+3=8;   输出 int 4
var_dump($my_var);  //输出8
var_dump($var1);   // 7
var_dump($var2);   //  10

$bar = 'foo';
$my_var = 10;  //$my_var = 10;  & 引用

var_dump($bar($my_var));  //输出4