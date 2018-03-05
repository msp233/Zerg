<?php
/**
 * Created by PhpStorm.
 * User: v_shipmao
 * Date: 2018/3/5
 * Time: 11:22
 */

namespace app\api\validate;


class IDMustBePostiveInt extends BaseValidate
{
    protected $rule = [
        'id' => 'require|number|isPositiveInteger:thinkphp',    // |isPositiveInteger 自己自定义的规则,
        'num' => 'in:1,2,3'
    ];
    protected function isPositiveInteger($value,$rule='',$data='',$field=''){
        if(is_numeric($value) && is_int($value+0) && ($value+0)>0 ){
            return true;
        }else{
            return $field.'必须是正整数！';
        }
    }
}