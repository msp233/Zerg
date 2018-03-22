<?php
/**
 * Created by PhpStorm.
 * User: v_shipmao
 * Date: 2018/3/20
 * Time: 14:08
 */
/*正则*/
echo '<hr/>后向引用<hr/>';
$str = '<b>abc</b>';
$pattern = '/<b>(.*)<\/b>/';
$re1 = preg_replace($pattern,'\\1',$str);
var_dump($re1);

$n = preg_match_all($pattern,$str,$arr1);
var_dump($n);
var_dump($arr1);


echo '<hr/>贪婪模式<hr/>';
$str = '<b>abc</b><b>bcd</b>';
$pattern = '/<b>(.*)<\/b>/';
$str1 = preg_replace($pattern,'\\1',$str);
var_dump($str1);

$str1 = preg_match_all($pattern,$str,$arr1);
var_dump($str1);
var_dump($arr1);

echo '<hr/>取消贪婪模式1  .*?  加？<hr/>';
$str = '<b>abc</b><b>bcd</b>';
$pattern = '/<b>(.*?)<\/b>/';
$str1 = preg_replace($pattern,'\\1',$str);
var_dump($str1);

$str1 = preg_match_all($pattern,$str,$arr1);
var_dump($str1);
var_dump($arr1);

echo '<hr/>取消贪婪模式2   加U<hr/>';
$str = '<b>abc</b><b>bcd</b>';
$pattern = '/<b>(.*)<\/b>/U';
$str1 = preg_replace($pattern,'\\1',$str);
var_dump($str1);

$str1 = preg_match_all($pattern,$str,$arr1);
var_dump($str1);
var_dump($arr1);

echo '<hr/>preg_match()<hr/>';


$str1 = preg_match($pattern,$str,$arr1);
var_dump($str1);
var_dump($arr1);