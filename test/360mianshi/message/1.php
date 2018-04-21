<?php
/**
 * Created by PhpStorm.
 * User: v_shipmao
 * Date: 2018/3/24
 * Time: 15:30
 */
#use \PDOException;

try{
    //操作数据库代码
    $dsn = "mysql:host=localhost;dbname=zerg";
    $username = "root";
    $password = "123456";
    $attr = '';

    $pdo = new PDO($dsn,$username,$password,$attr);
    $sql = 'SELECT id,title,content FROM message WHERE
user_name=:user_name';
    $statm = $pdo->prepare($sql);
    $statm->execute([':user_name' => $user_name]);
    $result = $statm->fetchAll(PDO::FETCH_ASSOC);
}catch(PDOException $e){
    echo $e->getMessage();
}