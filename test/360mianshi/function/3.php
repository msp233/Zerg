<?php
/**
 * Created by PhpStorm.
 * User: v_shipmao
 * Date: 2018/3/19
 * Time: 16:47
 */
$outer = 'str';
function mgfunc(){
    global $outer;
    var_dump($outer);
}

var_dump($outer);

mgfunc();

echo '##########';
$aaa = 'adsfadsf';
function mgfunc1(){
    $GLOBALS['aaa'];
    var_dump($aaa);
    var_dump($GLOBALS['aaa']);
}

var_dump($aaa);

mgfunc1();

