<?php
/**
 * 给定一个数组 nums，编写一个函数将所有 0 移动到数组的末尾，同时保持非零元素的相对顺序。
示例:

输入: [0,1,0,3,12]
输出: [1,3,12,0,0]
说明:

必须在原数组上操作，不能拷贝额外的数组。
尽量减少操作次数。
 *
 */

class Solution {

    /**
     * @param Integer[] $nums
     * @return NULL
     */

    //下面方法  执行12ms  击败93.41%
    //内存消耗16.2MB  击败100%
   static function moveZeroes(&$nums) {
        $count= count($nums);
        for($i=0;$i<$count;$i++) {
            if($nums[$i] ==0)
            {
                unset($nums[$i]);
                $nums[] =0;
                //array_push($nums,$count[$i])     经压测 结果
                //如果是压入一个元素，使用$arr[]=$value效率高，因为可以节省调用函数的额外负担。
                //如果同时压入多个元素，使用array_push效率高，因为不用重复获取文件尾的指针。
            }
        }
        return $nums;
    }

    static function moveZeroes1(&$nums){
        $j =0 ;
        $count= count($nums);
        for($i=0;$i<$count;$i++) {
               if ($nums[$i] !=0) {
                   $nums[$j] = $nums[$i];
                   if ($i != $j) {
                       $nums[$i] = 0;
                   }
                   $j++;
               }
        }
        return $nums;
    }
}

$nums  = [0,1,0,3,12];
//$result =Solution::moveZeroes($nums);
$result =Solution::moveZeroes1($nums);

 var_dump($result);exit;



