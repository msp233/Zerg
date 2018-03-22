<?php
/**
 * Created by PhpStorm.
 * User: v_shipmao
 * Date: 2018/3/19
 * Time: 16:47
 */
$count = 5;
function get_count(){
    static $count;
    return $count++;
}
var_dump($count);
echo '<hr/>';

++$count;

var_dump(get_count());
echo '<hr/>';

var_dump($count);
echo '<hr/>';

var_dump(get_count());