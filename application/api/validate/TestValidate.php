<?php
/**
 * Created by PhpStorm.
 * User: v_shipmao
 * Date: 2018/3/1
 * Time: 16:03
 */

namespace app\api\validate;


use think\Validate;

class TestValidate extends Validate
{
    //成员属性变量
    protected $rule = [
        'name' => 'require|max:10',
        'email' => 'email'
    ];
}