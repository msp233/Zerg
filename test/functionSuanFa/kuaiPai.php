<?php
/**
 * Created by PhpStorm.
 * User: msp
 * Date: 2017/7/10
 * Time: 10:38
 */

/**快速排序
 *快速排序算法是对冒泡算法的一个优化。
 *他的思想是先对数组进行分割，
 *把大的元素数值放到一个临时数组里，
 *把小的元素数值放到另一个临时数组里（这个分割的点可以是数组中的任意一个元素值，一般用第一个元素，即$array[0]），
 *然后继续把这两个临时数组重复上面拆分，
 *最后把小的数组元素和大的数组元素合并起来。
 *这里用到了递归的思想。
 */
function kuaisu($arr)
{
    $len = count($arr);
    if ($len <= 1) {
        return $arr;
    }
    $key = $arr[0];
    $left_arr = array();
    $right_arr = array();
    for ($i = 1; $i < $len; $i++) {
        if ($arr[$i] <= $key) {
            $left_arr[] = $arr[$i];
        } else {
            $right_arr[] = $arr[$i];
        }
    }
    $left_arr = kuaisu($left_arr);
    $right_arr = kuaisu($right_arr);
    return array_merge($left_arr, array($key), $right_arr);
}

$arr = array(23, 98, 54, 2, 9, 62, 34);
print_r(kuaisu($arr));
echo '<br/>';

function quick_sort($arr){
    $len = count($arr);
    if($len<=1){
        return $arr;
    }

    $key = $arr[0];
    $left = $right = array();
    for($i = 1;$i<$len;$i++){
        if($arr[$i]<$key){
            $left[] = $arr[$i];
        }else{
            $right[] = $arr[$i];
        }
    }

    $left = quick_sort($left);
    $right = quick_sort($right);
    return array_merge($left,array($key),$right);
}
$arr = array(23, 98, 54, 2, 9, 62, 34);
print_r(quick_sort($arr));