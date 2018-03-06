<?php
/**
 * Created by PhpStorm.
 * User: v_shipmao
 * Date: 2018/3/6
 * Time: 12:52
 */

namespace app\lib\exception;


class ParameterException extends BaseException
{
    public $code = 400;
    public $msg = '参数错误';
    public $errorCode = 10000;

}