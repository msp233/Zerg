<?php

/**
 * Created by PhpStorm.
 * User: msp
 * Date: 2017/7/7
 * Time: 16:56
 */
class User
{
    //静态变量保存全局实例
    private static $_instance = null;

    //私有构造函数，防止外界实例化对象
    private function __construct()
    {
        self::$_instance = 'abc';
    }

//静态方法，单例统一访问入口
    static public function getInstance()
    {
        if (is_null(self::$_instance) || isset(self::$_instance)) {
            self::$_instance = new self();
        }
        return self::$_instance;
    }

    public function getName()
    {
        echo '单例模式';
        //echo self::$_instance;
    }
}

//$a 实例化的类对象
$a = User::getInstance();
//var_dump($a);
//访问User类对象的getName方法
$a->getName();
/*class User1 extends User{
    protected static $__instance = null;
}*/

/*
优缺点：
    优点：
        1、改进系统设计
        2、是对全局变量的一种改进
    缺点：
        1、难于调试
        2、隐藏的依赖关系
        3、无法用错误类型的数据覆写一个单例
*/