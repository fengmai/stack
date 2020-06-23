<?php
/**
 *给定一个整数数组 nums 和一个目标值 target，请你在该数组中找出和为目标值的那 两个 整数，并返回他们的数组下标。
   你可以假设每种输入只会对应一个答案。但是，数组中同一个元素不能使用两遍。
示例:
给定 nums = [2, 7, 11, 15], target = 9
因为 nums[0] + nums[1] = 2 + 7 = 9
所以返回 [0, 1]
 * */

require './WasteTime.php';


class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[]
     */
    static function twoSum($nums, $target)
    {
        $arrayCount=  count($nums);
        for($i=0;$i<$arrayCount;$i++)
        {
            for($j=$arrayCount-1;$j>0;$j--)
            {
                if($nums[$i]+$nums[$j] ==$target && $i !=$j)
                {
                    return [$i,$j];
                }
            }
        }
    }

   static function twoSums($nums, $target) {
        $hash = [];
        $n = count($nums);
        for ($i = 0; $i < $n; $i++) {
            var_dump($i);
            $diff = $target - $nums[$i];
            if (isset($hash[$diff])) return [$i, $hash[$diff]];
            $hash[$nums[$i]] = $i;
        }
        return [];
    }

}

$startTime =WasteTime::microtime_float();
$aa = Solution::twoSum([1, 5, 4, 2,6],6);
var_dump($aa);
$totalTime = WasteTime::microtime_float()-$startTime;
var_dump($totalTime);

$startTime =WasteTime::microtime_float();
$bb = Solution::twoSums([1, 5, 4, 2,6],6);
var_dump($bb);
$totalTime = WasteTime::microtime_float()-$startTime;

var_dump($totalTime);exit;