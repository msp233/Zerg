<?php
/**
 * Created by PhpStorm.
 * User: v_shipmao
 * Date: 2018/3/19
 * Time: 9:27
 */
/*对象的问题
对象本身就是引用传递
*/
class Person{
    public $num = 'zhangsan ';
}

$p1 = new Person;
xdebug_debug_zval('p1');

$p2 = $p1;
xdebug_debug_zval('p1');

$p2->name = 'lisi';
xdebug_debug_zval('p1');