<?php
/**
 * Created by PhpStorm.
 * User: v_shipmao
 * Date: 2018/3/5
 * Time: 11:54
 */

namespace app\api\validate;


use think\Validate;
use think\Request;
use think\Exception;

class BaseValidate extends Validate
{
    public function goCheck(){
        //获取http传入的参数
        //对这些参数做校验
        $request = Request::instance();
        $params = $request->param();
        $result = $this->batch()->check($params);
        if(!$result){
            $error = $this->error;
            var_dump($error);
            throw new Exception($error);
        }else{
            return true;
        }
    }

}