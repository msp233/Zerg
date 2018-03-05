<?php
/**
 * Created by PhpStorm.
 * User: v_shipmao
 * Date: 2018/3/5
 * Time: 18:07
 */

namespace app\lib\exception;


use think\Exception;

class BaseException
{
    //HTTP 状态码 404 200 ...
    public $code = 400;

    //错误具体信息
    public $msg = 'Parameter error';

    //自定义的错误码
    public $errorCode = 10000;
}