<?php
/**
 * Created by PhpStorm.
 * User: v_shipmao
 * Date: 2018/3/11
 * Time: 20:13
 */
$str = '中国2北33京';
var_dump($str);
echo strlen($str),'<br/>';
echo mb_strlen($str).'<br/>';
echo mb_strlen($str,'utf8').'<br/>';


echo '<br/>substr_count($str,$needle)返回$needle在$str中出现的次数<br/>';
$str = 'fadsfnpbvgfovcn;slfdkcvn;akdgfrn;adsfnoawerjhlasgdfj;ldvgfnxcvlk;bnhreoiuho';
$counts1 = substr_count($str,'g');
echo '字符g在$str中出现',$counts1.'次<br/>';

var_dump($str);
$str1 = substr($str,0,strrpos($str,'i')+1);
var_dump($str1);
var_dump(substr($str,strrpos($str,';')));
var_dump(substr($str,strrpos($str,';')+1));

print_r($val = 333);

#unset($a);
$a += ($b = 4) + 5;
var_dump($a);

$foo[bar] = 'enemy';
var_dump($foo);

$count = 5;
function get_count(){
    static $count = 0;
    return $count++;
}
echo $count.'<br/>';
++$count;
echo $count.'<br/>';
echo get_count(),'<br/>';
echo $count.'<br/>';
echo get_count(),'<br/>';
echo $count.'<br/>';
echo get_count(),'<br/>';
echo $count.'<br/>';

echo '<br/>######################<br/>';

$counts = 5;
function get_counts(){
    global $counts;
    return $counts++;
}
echo $counts.'<br/>';
++$counts;
echo $counts.'<br/><br/>';
echo get_counts(),'<br/>';
echo $counts.'<br/><br/>';
echo get_counts(),'<br/>';
echo $counts.'<br/><br/>';
echo get_counts(),'<br/>';
echo $counts.'<br/><br/>';

$GLOBALS['var1'] = 5;
/*$var1 = 5;
global $var1;*/
$var2 = 1;
function get_value(){
    global $var2;
    $var1 = 0;
    return $var2++;
}
get_value();
$var1 =6;
echo $var1;
echo $var2;

echo'<br/>将jack添加到$arr数组的开头，并把jack打印出来<br/>';
$arr = ['tom','cat','tony'];
print_r($arr);
array_unshift($arr,'jack');
print_r($arr);
print_r(add_arr($arr,'jarry'));

function add_arr($arr,$str){
    //方法一
    $str1 = join(' ',$arr);
    $str1 = $str.' '.$str1;
    return explode(' ',$str1);

    //方法二
    /*$arr_temp = array_reverse($arr);
    $arr_temp[] = $str;
    return array_reverse($arr_temp);*/
}

echo '<br/>将heiheihei@qq.com中的域qq.com取出来并打印<br/>';
$mail = 'heiheihei@qq.com';
echo strchr($mail,'qq').'<br/>';

echo '<br/>',$mail,'<br/>';
echo str_replace('qq','163',$mail),'<br/>';
echo substr_replace($mail,'tencent',10,3),'<br/><br/>';

$mail = '啊都是佛啊女的撒娇@qq.com';
echo strchr($mail,'娇').'<br/>';

echo substr($mail,strpos($mail,'@')+1).'<br/>';

echo substr($mail,strrpos($mail,'@')+1).'<br/>';

$arr = explode('@',$mail);
echo $arr[count($arr)-1].'<br/>';

echo '<br/>字符串转换为整数的方法<br/>';
$str = '123';
var_dump(settype($str,'int'));
var_dump($str);
var_dump((int)'666');
var_dump(intval('888'));

$arr = ['a','b'];
echo '<br/>$arr = [\'a\',\'b\'];<br/>';
$re = array_push($arr,'e'); //返回处理后数组的元素个数
var_dump($re);
var_dump($arr);



