<?php
/**
 * Created by PhpStorm.
 * User: v_shipmao
 * Date: 2018/3/20
 * Time: 16:10
 */
//打开文件

//将文件内容读取出来，开头加入Hello World

//将拼接好的字符串写回到文件中

$file = './hello.txt';

$handle = fopen($file,'r');

$content = fread($handle,filesize($file));

$content = 'Hello World'."\n".$content;

fclose($handle);

$handle = fopen($file,'w');

fwrite($handle,$content);

fclose($handle);