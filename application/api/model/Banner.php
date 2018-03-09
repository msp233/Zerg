<?php
/**
 * Created by PhpStorm.
 * User: v_shipmao
 * Date: 2018/3/5
 * Time: 16:24
 */

namespace app\api\model;


use think\Db;
#use think\Exception;
#use \PDO as PDO;

class Banner
{
    /*
     * 定义一个静态方法
     * */
    public static function getBannerByID($id){
        #var_dump('ddd');
        //TODO：根据Banner ID号 获取Banner信息
        $result = Db::query('select * from banner_item where banner_id = ?',[$id]);
        #$result = Db::execute('select * from banner_item where img_id = ?',[$id]);

        /*$dsn = "mysql:host=localhost;dbname=zerg";
        $username = "root";
        $password = "123456";
        $pdo = new PDO($dsn,$username,$password);
        $query = "select * from banner_item where img_id = ?";
        $statm = $pdo->prepare($query);
        $statm->bindParam(1,$id);
//PDOStatement 执行准备语句
        $statm->execute();
//获取结果集中的结果
//PDO::FETCH_ASSOC 关联数组
        $result = [];
        while($row=$statm->fetch(PDO::FETCH_ASSOC)){
            $result[] = $row;
        }*/
//PDO::FETCH_NUM 索引数组
//PDO::FETCH_NUM 关联和索引数组 默认格式

//PDO::FETCH_NUM 索引数组
//PDO::FETCH_NUM 关联和索引数组 默认格式
        return($result);
    }















}