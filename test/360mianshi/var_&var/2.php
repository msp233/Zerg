<?php
/**
 * Created by PhpStorm.
 * User: v_shipmao
 * Date: 2018/3/18
 * Time: 18:07
 */
//定义一个变量
$a = range(0,3);

var_dump(memory_get_usage());

//定义变量b，将a变量的值赋给变量b
//COW Copy On Write
$b = &$a;

var_dump(memory_get_usage());

//对a进行修改
$a = range(0,3);

var_dump(memory_get_usage());

unset($a);

var_dump(memory_get_usage());
var_dump($b);