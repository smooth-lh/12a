<?php
/**
 * 函数
 */
//输出函数
echo NumberOf1();
//定义方法
function NumberOf1()
{
    $num = 10;
    $ber = decbin($num);
    //输出
    echo substr_count($ber,'1');
}