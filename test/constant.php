<?php

/**
 * Created by PhpStorm.
 * User: v_shipmao
 * Date: 2018/3/12
 * Time: 10:18
 */
define('TEST','hello constant');

if(defined('TEST')){
    echo '常量TEST定义为：',TEST;
}else{
    echo 'TEST未定义';
}