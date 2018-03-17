<?php
/**
 * Created by PhpStorm.
 * User: v_shipmao
 * Date: 2018/3/12
 * Time: 7:29
 */

echo "将字符串1234567890 转换成 1,234,567,890形式";
echo "<br/>";

function str($str){
    $str = strrev($str);
    $str = chunk_split($str,3,',');
    $str = substr($str,0,strlen($str)-1);
    $str = strrev($str);
    //ltrim 从左侧移除字符
    $str = ltrim($str,',');
    return $str;
}
echo (str('1234567890'));
//中华人民共和国成立了

echo "<hr/>";
echo '如何实现字符串翻转 (支持中文)<br/>';

function strrev_utf8($str){
    return join('',array_reverse(preg_split("//u",$str)));
}
$str = '中华人民共和国成立了';
echo $str,"<br/>";
$str = strrev_utf8($str);
echo $str;

echo '<hr/>';
echo '将字符串www.baidu.com 输出成 moc.udiab. <br/>';
$str = 'www.baidu.com';
echo strrev(str_replace('www','',$str));

