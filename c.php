<?php
/**
 * 奇数偶数排序
 */
//定义数组
$arr = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
//定义方法
function reOrderArray($arr)
{
    $length = count($arr);
    //从前往后遍历
    for ($i = 1; $i < $length; $i++) {
        //判断当前元素是奇数
        $target = $arr[$i];
        if ($target % 2 == 1) {
            //从后往前遍历,如果有偶数就往后移动一位
            $j = $i - 1;
            while ($j >= 0 && $arr[$j] % 2 == 0) {
                $arr[$j + 1] = $arr[$j];
                $j--;
            }
            //把奇数插入位置
            $arr[$j + 1] = $target;
        }
    }
    return $arr;
}
$arr2 = reOrderArray($arr);
var_dump($arr2);
