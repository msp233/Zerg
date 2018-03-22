<?php
/**
 * Created by PhpStorm.
 * User: v_shipmao
 * Date: 2018/3/20
 * Time: 9:21
 */
function &myfunc(){
    static $b = 10;
    return $b;
}
$a = myFunc();   //->$a = 10; $b = 10;
$a = &myFunc();  //  $a = &$b
$a = 100;          //$a=$b =100
echo myFunc();    // 100