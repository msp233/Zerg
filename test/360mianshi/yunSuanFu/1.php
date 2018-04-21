<?php
$str = <<<'EOT'
    <h2>PHP的错误抑制符</h2>
     <ol>
         <li>错误抑制符  @</li>
         <li>运算符的优先级比较运算符</li>
         <li>递增/递减运算符</li>
         <li>逻辑运算符</li>
     </ol>
EOT;
echo $str;
echo 'PHP 运算符优先级<hr/>';
echo <<<EOF
递增/递减  >  !  >算数运算符  > 大小比较  >  (不)相等比较  >  引用  >
位运算符(^)  >  位运算符(|)  > 逻辑与 > 逻辑或 > 三目运算符 > 赋值运算符  
> and  > xor > or <hr/>
递增/递减  >  !  >算数运算符  > 大小比较  > 逻辑与 > 逻辑或 > 三目运算符 > 赋值运算符<hr/>
EOF;

$a = 0;
$b = 0;
if($a = 3 > 0 || $b = 3 > 0){
    $a++;
    $b++;
    echo $a."<br/>";
    echo $b."<hr/>";
}
/*
 *
1.用root 进入mysql后
mysql>set password =password('123456');
mysql>flush privileges;
2.使用GRANT语句
mysql>grant all on zerg.* to 'msp666'@'localhost' IDENTIFIED BY '123456'with grant option ;
mysql>flush privileges;

3.进入mysql库修改user表
mysql>use mysql;
mysql>update user set password=password('你的密码') where user='root';
mysql>flush privileges
 * */

?>


