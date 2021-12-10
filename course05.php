<?php

define('name','sh');
echo name;
//使用define 定义的 常量

//变量是一个内存中存储的数据
$var = "good";
function c(){
    $l_var=4;

    echo($l_var);
//    echo($var); ～syntax Error
}
c();
//所以函数内的话调用变量的话只能是局部变量


$var1= 6;
function d(){
    global $var1;
    echo $var1;
}
d();
//因为声明一个变量直接在函数调用是没办法调用的，所以呢 需要在函数内将他重新声明为全局变量即可使用


function e(){
    static $var2;
    $var2+=1;
    echo $var2;
}
e();
//因为变量值在函数中可能存在变化 所以使用静态变量 直接声明 直接就在函数内进行赋值即可
;?>