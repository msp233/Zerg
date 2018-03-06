<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

use think\Route;

Route::get('api/v1/banner/:id','api/v1.Banner/getBanner');














/*
 测试代码
Route::rule('hello','sample/index/hello','GET|POST',['https'=>true]);
Route::rule('index','index/index/index','GET',['https'=>true]);
Route::get('test/:id','sample/index/test');*/
#Route::rule('路由表达式','路由地址','请求类型','路由参数(数组)','变量规则(数组)');
#请求类型 GET POST DELETE PUT *    *为任何请求类型

/*配置写法*/
/*return [
    '__pattern__' => [
        'name' => '\w+',
    ],
    '[hello]'     => [
        ':id'   => ['index/hello', ['method' => 'get'], ['id' => '\d+']],
        ':name' => ['index/hello', ['method' => 'post']],
    ],

];*/
