
<?php
/**
 * Created by PhpStorm.
 * User: v_shipmao
 * Date: 2018/3/24
 * Time: 19:25
 */
/*
 1+2+3+4+...+n
*/

/*fun1方法时间复杂度为:  O(n)*/
function fun1($n){
    $sum = 0;
    for($i = 1;$i <= $n; $i++){
        $sum += $i;
    }
    return $sum;
}

/*
 * fun2 算法 时间复杂度为 O(1)
 * */
function fun2($n){
    echo $n;
    echo $n;
    echo $n;
}

/*
 * fun3 算法 时间复杂度为 O(n^2)
 * */
function fun3($n){
    $sum = 0;
    for($i = 1;$i<=$n;$i++){
        for($j=1;$j<=$n;$j++){
            $sum += $j;
        }
    }
    return $sum;
}

function fun4($n){
    $sum = 0;
    for($i=1;$i<=$n;$i++){
        for($j=1;$j<=$n;$j++){
          $sum+= $j;
        }
    }

    for($m=1;$m<=$n;$m++){
        $sum+=$m;
    }

    echo $sum+$i;
}

function fun5($n){
    while($n>=1){
        $n = $n/2;
    }
}
