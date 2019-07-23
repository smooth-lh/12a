<?php
/**
 * 字符串
 */
//输出函数
echo FirstNotRepeatingChar();
//定义函数
function FirstNotRepeatingChar()
{
    $str = 'aabbccdesdjlkdsfklsd';
    $arr = str_split($str);
    foreach ($arr as $k => $v) {
        if (substr_count($str, $v) == 1) {
            return $k;
        }
    }
}
