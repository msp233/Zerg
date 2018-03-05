<?php
/**
 * Created by PhpStorm.
 * User: v_shipmao
 * Date: 2018/2/28
 * Time: 18:13
 */
#3.2
namespace app\sample\controller;
use think\Request;

class Index
{
    public function index(){
        return 'app\sample\controller\index\index';
    }
    public function hello($id,$name){
        echo '$id='.$id."\n";
        echo '$name='.$name."\n";
        #return 'app\sample\controller\index\hello hello';
    }
    public function test(){
        #Request::instance()->param('***')形式 不区分请求形式，get post PUT 等形式都可以获取
        #获取所有，''里面什么也不传，返回一个数组
        $id = Request::instance()->param('id');
        $username = Request::instance()->param('name');
        $age = Request::instance()->param('age');
        echo '$id='.$id."\n";
        echo '$name='.$username."\n";
        echo '$age='.$age."\n";
        print('');
        $all = Request::instance()->param();
        print('$all=');
        print_r($all);
        $gett = Request::instance()->get();
        print('gett=');
        print_r($gett);
        $is = Request::instance()->route();
        print('iss=');
        print_r($is);
        print('domain:'.Request::instance()->domain());
        print('');
        print('file:'.Request::instance()->baseFile());


        #return 'app\sample\controller\index\test test';
    }















}