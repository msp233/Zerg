<?php
/**
 * Created by PhpStorm.
 * User: v_shipmao
 * Date: 2018/3/13
 * Time: 12:38
 */
function join_arr($arr){
    return join(',',$arr);
}
$arr = array('james','tom','symfony');
echo join_arr($arr),'<br/>';

$str = 'abcdef';
echo $str[0],$str{2},'<br/>';

echo '<p>= 与 == 与 === 的异同以及运算中的优先级</p>';
$result = 0==false?'true':'false';
echo '0==false= ',$result,'<br/>';

$result = 0===false?'true':'false';
echo "0===false= ",$result,'<br/>';

$result = 'a'=='a'?'true':'false';
echo "'a'=='a'= ".$result,'<br/>';

$result = 'a'==='a'?'true':'false';
echo "'a'==='a'= ".$result,'<br/>';

$result = 1=='1'?'true':'false';
echo "1=='1'= ",$result,'<br/>';

$result = 1==='1'?'true':'false';
echo "1==='1'= ",$result,'<br/>';

echo '<p>printf的使用</p>';
printf("%.2d\n",42);
printf("%1.2f\n",42);
printf("%1.2u\n",42);

$str = 'Content-Type:text/xml';
echo '<p>',strchr($str,':'),'</p>';

var_dump( in_array('01',array('1')) );

$result = var_dump('01' == 1);

var_dump($result);

var_dump(var_dump('abc'));

var_dump(true == null);

$a = in_array('01',array('1')) == var_dump('01' == 1);
var_dump('$a=',$a);

echo '<p>强制类型转换</p>';
echo intval('09'),'<br/>';
echo (int)'09','<br/>';

echo'<br/>写一个函数，将"open_door"转换为 "OpenDoor"<br/>';
function upper_str($str){
    $arr = explode('_',$str);
    $arr = array_map('ucfirst',$arr);
    return join('',$arr);
}
$str = 'open_door';
echo upper_str($str),'<br/>';

var_dump(strcasecmp('abc','bc'));
var_dump(strcasecmp('abc','abc'));
var_dump(strcasecmp(1,8));
var_dump(strcasecmp(6,6));
var_dump(strcasecmp(8,6));

$a = 'hello';
$b = &$a;
echo '$b = &$a;';
var_dump($a,$b);
$b = 7;
echo '$b = 7;';
var_dump($a,$b);
unset($b);
echo 'unset($b);';
var_dump($a);
$b = 'world';
echo "$b = 'world';";
var_dump($a,$b);

echo'<br/><pre>
$a=1;
$b = &$a;
$c = $a++;
var_dump($a,$b,$c);
</pre>';
$a=1;
$b = &$a;
$c = $a++;
var_dump($a,$b,$c);

echo date('Y-m-d H:i:s',time());

$arr = ['a','b','c','d'];
$randValue = array_rand($arr);
var_dump($randValue);
$result = is_string($randValue);
var_dump($result);

$arr = array(
    'a' => 'b',
    'b' => '1',
    'c' => 0,
    'd' => '0',
    'e' => 3,
    'f' => 'a'
);
$randValue = array_rand($arr,2);
var_dump($randValue);
$result = is_string($randValue);
var_dump($result);

$a = '01';
$result = 1;
$result = in_array($a,array('1'));
var_dump($result);
var_dump($a);
var_dump($a[1]);

$arr1 = array('1','2',3);
$arr2 = array(3);
var_dump(in_array($arr1,$arr2));

$arr3 = array_merge($arr1,$arr2);
var_dump($arr3);


$str = 'this is php';
var_dump($str);

$arr = explode(' ',$str);
$arr = array_reverse($arr);
$str = join(' ',$arr);
var_dump($str);

$arr = explode(' ',$str);
krsort($arr);
$str = join(' ',$arr);
var_dump($str);