<?php
/**
 * Created by PhpStorm.
 * User: v_shipmao
 * Date: 2018/3/14
 * Time: 12:18
 */

echo '<br/>成员方法与类名相同时，相当于构造方法，在类实例化时调用<br/>';
class a{
    protected $c;
    public function a(){
        $this->c = 10;
    }
}

class b extends a{
    public function print_data(){
        return $this->c;
    }
}

$b = new b();
var_dump($b->print_data());
