<?php
/**
 * 判断数组
 */
echo Find();
//定义方法
function Find()
{
    $target = 7;
    $array = [[1, 2, 8, 9], [2, 4, 9, 12], [4, 7, 10, 13], [6, 8, 11, 15]];
    if (in_array($target, $array)) {
        echo "不存在";
    } else {
        echo "存在";
    }
}