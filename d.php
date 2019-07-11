<?php
/**
 * 奇数偶数排序
 */
$arr = array(1,2,3,4,5,6);

function getOder($arr)
{
    $length = count($arr);
    //从前往后遍历
    for ($i = 1; $i < $length; $i++)
    {
        //判断奇数的存在
        $target = $arr[$i];
        if($target % 2 == 1){
            //从后往前遍历，如果查询到偶数就放后面
            $j = $i - 1;
            while ($j >= 0 && $arr[$j] % 2 == 0){
                $arr[$j + 1] = $arr[$j];
                $j--;
            }
            //插入奇数
            $arr[$j + 1] = $target;
        }
    }
    return $arr;
}
$arr2 = getOder($arr);
var_dump($arr2);