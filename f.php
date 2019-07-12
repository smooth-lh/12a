<?php
/**
 * 查找带1的数字
 */
echo calFn(1,1300);
function calFn($n,$m)
{
    //定义计数器
    $num = 0;
    //循环
    for ($i = $n; $i <= $m; $i++){
        //处理$i
        $s = $i;
        while ($s){
            if($s % 10 == 1){
                $num++;
            }
            $s = floor($s / 10);
        }
    }
    return $num;
}