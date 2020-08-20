<?php
/**
 * 扑克牌中随机抽取五张牌 判断是否是连续的五张    假设大小王为0   其他牌 0~13
 *
 * */

function isContinuation($array)
{
    $min = min($array);
    $max = max($array);
    if ($max >13)
    {
        return false;
    }

    for($i=$min;$i<$min+5;$i++)
    {
        var_dump($i);
        if (!in_array($i,$array))
        {
            return false;
        }

    }
    return true;

}

var_dump(isContinuation([10,11,12,13,14]));
var_dump(isContinuation([1,2,3,4,6]));
var_dump(isContinuation([1,2,3,4,1]));
