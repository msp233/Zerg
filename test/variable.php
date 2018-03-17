<?php
/**
 * Created by PhpStorm.
 * User: v_shipmao
 * Date: 2018/3/12
 * Time: 7:18
 */
$num = 10;
function multiply($num){
    $num = $num * 10;
}

multiply(10);
echo $num;
echo '  ';


$abc = &$num;
echo $abc,$num;

$abc = 3;
echo $abc,$num;

$num = 6;
echo $abc,$num;
