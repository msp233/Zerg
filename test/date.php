<!--
/**
 * Created by PhpStorm.
 * User: v_shipmao
 * Date: 2018/3/11
 * Time: 20:40
 */-->
<html>
<head>
    <title>date函数</title>
</head>
<body>

<pre>
    <h2>输出前一天时间，格式为2018-3-11 11:23:55</h2>
    <?php
    echo '当前时间',date('Y-m-d H:i:s',time())."\n";
    echo date('Y-m-d H:i:s',time()-3600*24),"\n";
    echo date('Y-m-d H:i:s',strtotime('-1 day'));
    ?>

    <h2>求2017-11-3 & 2015-3-2两个日期的差数</h2>
    <?php
    echo (strtotime('2017-11-3') - strtotime('2015-3-2'))/3600/24
    ?>

    <h2>不使用第三个变量交换两个变量的值</h2>
    <?php
    $a = 'PHP';
    $b = 'MySQL';

    echo '方法一：';
    echo $a, $b;
    list($a, $b) = array($b,$a);
    echo '<br/>';
    echo $a,$b;

    echo "\n方法二：";
    echo $a,$b;
    echo '<br/>';
    $a = $a.' '.$b;
    $b = explode(' ',$a);
    $a = $b[1];
    $b = $b[0];
    echo $a,$b;
    ?>
</pre>
</body>
</html>

