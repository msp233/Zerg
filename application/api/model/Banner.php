<?php
/**
 * Created by PhpStorm.
 * User: v_shipmao
 * Date: 2018/3/5
 * Time: 16:24
 */

namespace app\api\model;


use think\Db;
use think\Exception;

class Banner
{
    /*
     * 定义一个静态方法
     * */
    public static function getBannerByID($id){
        var_dump('ddd');
        //TODO：根据Banner ID号 获取Banner信息
        #$result = Db::query('select * from banner_item');
        #$result = array('abc','bcd','dfad');
        $result = [$id];
        var_dump('eee');
        return $result;
    }















}