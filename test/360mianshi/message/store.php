<?php
/**
 * Created by PhpStorm.
 * User: v_shipmao
 * Date: 2018/3/24
 * Time: 15:53
 */
$title = $_POST['title'];
$content = $_POST['content'];
$user_name = $_POST['user_name'];
$created_at = time();

if(empty($title) || empty($content) || empty($user_name)){
    exit('标题/内容/用户名 不能为空');
}

try{
    $dsn = 'mysql:dbname=test;host=localhost';
    $username = 'root';
    $password = '123456';
    $attr = [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ];
    $pdo = new PDO($dsn,$username,$password,$attr);
    $sql = 'insert into message(title,content,created_at,user_name)
          values (:title,:content,:created_at,:user_name)';
    $statm = $pdo->prepare($sql);
    $data = [
        ':title' => $title,
        ':content' => $content,
        'created_at' => $created_at,
        ':user_name' => $user_name
    ];
    $statm->execute($data);
    $rows = $statm->rowCount();

    if($rows){
        exit('添加成功');
    }else{
        exit('添加失败');
    }

}catch(PDOException $e){
    echo $e->getMessage();
}
