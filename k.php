<?php
/**
 * 字符串反转
 */
$str = "student. a am I";
//定义方法
function ReverseSentence($str)
{
    $arr = explode(" ",$str);
    krsort($arr);
    $arr = implode(" ",$arr);
    return $arr;
}
//输出函数
print_r(ReverseSentence($str));
