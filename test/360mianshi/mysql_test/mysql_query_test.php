<?php
/**
 * Created by PhpStorm.
 * User: v_shipmao
 * Date: 2018/3/31
 * Time: 10:53
 */

header("Content-Type:text/html;charset=utf-8");
//1、连接数据库
$server = "192.168.10.11:3306";
$username = "msp666";
$password = "123456";
$link = mysql_connect($server,$username,$password);
//2、选择数据库
mysql_select_db("cms");
//3、操作
$query = "select id,username,password from users";
$result = mysql_query($query);
var_dump(mysql_fetch_assoc($result));
echo '<hr/>';
var_dump(mysql_fetch_assoc($result));
echo '<hr/>';
var_dump(mysql_fetch_assoc($result));
echo '<hr/>';
//4、关闭数据库
mysql_close();

?>




















