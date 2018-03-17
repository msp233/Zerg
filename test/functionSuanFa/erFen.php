<?php
/**
 * Created by PhpStorm.
 * User: msp
 * Date: 2017/7/10
 * Time: 11:14
 */
//二分法排序
//二分查找O(log2n)
function erfen($a,$l,$h,$f){
    if($l >$h){ return false;}
    $m = intval(($l+$h)/2);
    if ($a[$m] == $f){
        return $m;
    }elseif ($f < $a[$m]){
        return erfen($a, $l, $m-1, $f);
    }else{
        return erfen($a, $m+1, $h, $f);
    }

}
$a = array(1,12,23,67,88,100);
var_dump(erfen($a,0,6,1));

//插入排序  O(N*N)
function charu($a){
    $c = count($a);
    for($i=1;$i<$c;$i++){
        $t = $a[$i];
        for($j=$i;$j>0 && $a[$j-1]>$t;$j--){
            $a[$j] = $a[$j-1];
        }
        $a[$j] = $t;
    }
    return $a;
}
var_dump(charu($a));