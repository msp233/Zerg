<?php
/**
 * Created by PhpStorm.
 * User: v_shipmao
 * Date: 2018/3/5
 * Time: 11:54
 */

namespace app\api\validate;


use app\lib\exception\ParameterException;
use think\Validate;
use think\Request;

class BaseValidate extends Validate
{
    public function goCheck(){
        //获取http传入的参数
        //对这些参数做校验
        $request = Request::instance();
        $params = $request->param();
        $result = $this->batch()->check($params);
        if(!$result){
            $err = $this->error;
            #var_dump($err);
            $msg = join($this->error,' ');
            #var_dump($msg);
            $e = new ParameterException([
                'msg' => $msg,
                'errorCode' => 10001
            ]);
            //第二种实例化 start
            /*$e = new ParameterException();
            $e->msg = join($this->error,' ');
            $e->errorCode = 10002;*/
            //第二种实例化 end
            throw $e;
            #var_dump($error);
            #throw new Exception(join($err,' '));
        }else{
            return true;
        }
    }

}