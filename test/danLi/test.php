<?php
namespace DanLi;
/**
 * Created by PhpStorm.
 * User: msp
 * Date: 2017/7/8
 * Time: 23:22
 */

class Test{
    private $a = '';
    private $b = '';
    private $c = '';
    private $d = '';
    //构造方法：每次被实例化时 都需要执行一遍构造方法
    protected function __construct(){

    }
    public static function getInstance(){
        $_test = new test();
        return $_test;
    }

    /**
     * @return string
     */
    public function getA(): string
    {
        return $this->a;
    }

    /**
     * @param string $a
     */
    public function setA(string $a)
    {
        $this->a = $a;
    }

    /**
     * @return string
     */
    public function getB(): string
    {
        return $this->b;
    }

    /**
     * @param string $b
     */
    public function setB(string $b)
    {
        $this->b = $b;
    }

    /**
     * @return string
     */
    public function getC(): string
    {
        return $this->c;
    }

    /**
     * @param string $c
     */
    public function setC(string $c)
    {
        $this->c = $c;
    }

}
//单例模式，只能实例化一次，通过 __construct 实现
//$test = new Test();

//应该这么实例化
$test = Test::getInstance();

$test->setA("abcd");
echo $test->getA();
var_dump("<br/>");
echo count ("123");
var_dump("<br/>");
printf("%1.2f\n", 42);