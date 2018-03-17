<?php
/**
 * Created by PhpStorm.
 * User: v_shipmao
 * Date: 2018/3/12
 * Time: 10:00
 */

$arr = $arr1 = $arr2 = $arr3 = $arr4 = array(
    3,
    'b' => 6,
    1,
    9,
    'e' => 2,
    'b',
    'c' => 5,
    'a' => 11,
    'f' => 'd',
    'd' => 'c'
);
var_dump($arr);

echo '先abc 后123';
var_dump(sort($arr1));
echo 'sort($arr1) 对数组元素的值进行正序排列，key int ';
var_dump($arr1);

var_dump(asort($arr2));
echo 'asort($arr2) 对数组元素的值进行正序排列，键值关联';
var_dump($arr2);

var_dump(arsort($arr3));
echo 'arsort($arr3) 对数组元素的值进行倒序排列，键值关联 先int 后cba';
var_dump($arr3);

var_dump(ksort($arr4));
echo 'ksort($arr4) 根据key进行排序';
var_dump($arr4);

echo count('');
echo count(null);