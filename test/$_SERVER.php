<?php
/**
 * Created by PhpStorm.
 * User: v_shipmao
 * Date: 2018/3/11
 * Time: 20:20
 */
echo('$_SERVER[\'DOCUMENT_ROOT\']= 当前运行脚本，所在的文档根目录');
var_dump($_SERVER['DOCUMENT_ROOT']);

echo('$_SERVER[\'HTTP_HOST\']= 当前请求的Host头部的内容');
var_dump($_SERVER['HTTP_HOST']);

echo('$_SERVER[\'REMOTE_ADDR\']= 正在浏览当前页面用户的IP地址');
var_dump($_SERVER['REMOTE_ADDR']);

echo('$_SERVER[\'SERVER_ADDR\']= 服务器IP');
var_dump($_SERVER['SERVER_ADDR']);

echo('$_SERVER[\'HTTP_REFERER\']= 链接到当前页面的前一页面的URL地址');
var_dump($_SERVER['HTTP_REFERER']);

echo('$_SERVER[\'SERVER_NAME\']= 当前运行脚本所在服务器主机的名称');
var_dump($_SERVER['SERVER_NAME']);

echo('$_SERVER[\'SCRIPT_FILENAME\']= 当前执行脚本路径');
var_dump($_SERVER['SCRIPT_FILENAME']);

echo('__FILE__= 当前执行脚本路径');
var_dump(__FILE__);

echo('$_SERVER[\'PHP_SELF\']= 当前脚本名称');
var_dump($_SERVER['PHP_SELF']);

echo('$_SERVER[\'QUERY_STRING\']= 所得到的参数');
var_dump($_SERVER['QUERY_STRING']);

echo( 'a');
$b = print("\n abc");
var_dump($b);
$c = print("\n aaaa");
var_dump($c);