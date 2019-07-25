<?php
/**
 * 循环排序
 */
//输出函数
echo Combine();
//定义方法
function Combine()
{
    $A = [1, 3, 6, 9];
    $B = [2, 4, 5, 8, 20];
    $arr = array_merge($A, $B);
    $a = count($arr);
    for ($j = 0; $j < $a - $j; $j++) {
        for ($i = 0; $i < $a - 1; $i++) {
            if ($arr[$i] > $arr[$i + 1]) {
                $tep = $arr[$i];
                $arr[$i] = $arr[$i + 1];
                $arr[$i + 1] = $tep;
            }
        }
    }
    print_r($arr);
}