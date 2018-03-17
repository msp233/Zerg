<?php
/**
 * Created by PhpStorm.
 * User: v_shipmao
 * Date: 2018/3/12
 * Time: 11:03
 */
$path = 'C:\Users\dfad\Documents\RTXC File List\Accounts\dfad@group.tencent.com\RTXDownload\adfads.php';

function ext_name1($path){
    return substr($path,strrpos($path,'.')+1);
}
echo ext_name1($path).'<br/>';

function ext_name2($path){
    #var_dump($path);
    $arr = explode('.',$path);
    #var_dump($arr);
    #$ext = array_pop($arr);
    #var_dump($arr);
    return $arr[count($arr)-1];
}
echo ext_name2($path),'<br/>';

function ext_name3($path){
    $path_parts = pathinfo($path);
    #var_dump($path_parts);
    return $path_parts['extension'];
}
echo ext_name3($path),'<br/>';



