<?php
/**
 * Created by PhpStorm.
 * User: v_shipmao
 * Date: 2018/3/5
 * Time: 18:09
 */

namespace app\lib\exception;


class BannerMissException extends BaseException
{
    /*成员变量*/
    public $code = 404;
    public $msg = '请求的Banner不存在';
    public $errorCode = '40000';






















}