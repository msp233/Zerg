<?php
/**
 * Created by PhpStorm.
 * User: v_shipmao
 * Date: 2018/3/18
 * Time: 18:07
 */
/*引用变量*/
//unset只会取消引用，不会销毁空间
$a = 1;
xdebug_debug_zval('a');

//定义变量b，把a的值赋值给b
$b = &$a;
xdebug_debug_zval('a');
unset($b);


xdebug_debug_zval('a');

/*
 * refcount 有几个变量指向它
 * is_ref 是不是引用 false不是引用
a:
(refcount=1, is_ref=0),
array (size=4)
  0 => (refcount=1, is_ref=0),int 0
  1 => (refcount=1, is_ref=0),int 1
  2 => (refcount=1, is_ref=0),int 2
  3 => (refcount=1, is_ref=0),int 3
*/