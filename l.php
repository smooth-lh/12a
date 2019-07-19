<?php
/**
 * 递归
 */
//返回函数
echo Sum_Solution(5);
//定义方法
function Sum_Solution($n)
{
//    判断
    if ($n == 1){
        return 1;
    }
    //返回值
    return $n+Sum_Solution($n - 1);
}