<?php
//定义数组
$array = [2,4,3,6,3,2,5,5];
//调用函数
$arr = FindNumsAppearOnce($array);
var_dump($arr);
//定义方法
function FindNumsAppearOnce($array)
{
    $arr = array_count_values($array);
    asort($arr);
    $keys = array_keys($arr);
    return [$keys[0],$keys[1]];
}
