<?php
/**
 * Created by PhpStorm.
 * User: v_shipmao
 * Date: 2018/3/20
 * Time: 16:28
 */
$dir = './test';

//打开目录
//读取当中的文件
//如果文件类型是目录，继续打开目录
//读取子目录的文件
//如果文件类型是文件，输出文件名称
//关闭目录

function loopDir($dir){
    $handle = opendir($dir);

    while(false !== ($file = readdir($handle))){
        if($file != '.' && $file != '..'){
            echo $file.'<br/>';
            if(filetype($dir.'/'.$file) == 'dir'){
                loopDir($dir.'/'.$file);
            }
        }
    }
}

loopDir($dir);