<?php
/**
 * Created by PhpStorm.
 * User: v_shipmao
 * Date: 2018/3/19
 * Time: 9:35
 */
$data = ['a','b','c'];

foreach($data as $key => $val){
    $val = &$data[$key];
    var_dump($data);
}
var_dump($data);