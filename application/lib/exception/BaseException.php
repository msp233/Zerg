<?php
/**
 * Created by PhpStorm.
 * User: v_shipmao
 * Date: 2018/3/5
 * Time: 18:07
 */

namespace app\lib\exception;


use think\Exception;

class BaseException extends Exception
{
    /*成员变量*/
    //HTTP 状态码 404 200 ...
    public $code = 400;

    //错误具体信息
    public $msg = 'Parameter error';

    //自定义的错误码
    public $errorCode = 10000;

    /*构造函数*/
    public function __construct($params = []){
        if(!is_array($params)){
            //throw new Exception('参数必须是数组');
        }
        if(array_key_exists('code',$params)){
            $this->code = $params['code'];
        }
        if(array_key_exists('msg',$params)){
            $this->msg = $params['msg'];
        }
        if(array_key_exists('errorCode',$params)){
            $this->errorCode = $params['errorCode'];
        }
    }


}