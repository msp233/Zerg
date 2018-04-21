<?php
/**
 * Created by PhpStorm.
 * User: v_shipmao
 * Date: 2018/3/25
 * Time: 10:13
 */
/*1，1，2，3，5，8，13，21，34...    求第30位数是多少，请用伪代码描述其实现方法*/
echo '1，1，2，3，5，8，13，21，34...    求第30位数是多少，请用伪代码描述其实现方法<hr/>';


    $i = 0;
function fun1($num,$m=1,$n=1){
    #static $i = 0;
    global $i;
    $sum = $m + $n;
    $i++;

    #var_dump($i);
    if($i >= $num){
        var_dump($m);
        return $m;
    }
    #var_dump($sum);
    fun1($num,$n,$sum);
}
#echo fun1(1);
echo fun1(30);

function fun2($num){
    $arr = array(1,1);
    for($i = 2; $i < $num; $i++){
        $arr[$i] = $arr[$i-2] + $arr[$i-1];
    }
    return $arr[$num-1];
}

var_dump(fun2(30));

echo '写一个函数实现   \'open_door\'   ->  \'OpenDoor\'   ....<hr/>';

function fun3($str){
    $arr = explode('_',$str);
    $arr = array_map('ucfirst',$arr);
    $str = join('',$arr);
    return $str;
}

var_dump('open_door',fun3('open_door'),'make_by_id',fun3('make_by_id'));


echo '<h2>不使用PHP函数，用方法写一个反转字符串的函数</h2>';
function str_rev($str){
    $len = strlen($str);
    $str1 = '';
    for ($i=$len-1;$i>=0;$i--){
        $str1 .= $str[$i];
    }
    return $str1;
}

var_dump('My Name Is abcde',str_rev('My Name Is abcde'));


echo '<h2>写一个函数，要求不使用array_merge完成多个数组的合并</h2>';
/*
 * $arr1 第一个数组
 * $arr2 第二个数组
 * $status 是否将$arr2的键名保存
 * */
function array_hebing($arr1,$arr2,$status=true){
    foreach ($arr2 as $key => $value){
        $status ? $arr1[$key] = $value : $arr1[] = $value;
    }
    return $arr1;
}

$arr1 = ['adf','tom',32,'er'=>'er','abc'];
$arr2 = ['嗯嗯','真的','c'=>'嘿嘿'];
var_dump(array_hebing($arr1,$arr2));
var_dump(array_hebing($arr1,$arr2,false));

function array_mer(){
    $return = [];
    $arr = func_get_args();
    var_dump($arr);
    foreach($arr as $arr){
        if(is_array($arr)){
            foreach ($arr as $val){
                $return[] = $val;
            }
        }
    }
    return $return;
}
var_dump(array_mer($arr1,$arr2));


name是key

name     subject   score
张三    数学         80
张三    语文         80
张三    数学         80
张三    英语         80
李四    数学         80
李四    数学         80
李四    数学         80
李四    数学         80
李四    数学         80
李四    数学         80
李四    语文         80
张三    数学         80