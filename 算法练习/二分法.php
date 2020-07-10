<?php

//二分查找
function binarySearch($array,$searchKey)
{
   $count = count($array);
   $low = 0;
   if ($count ==0) return 0;
   $height = $count-1;



   while ($low  <=$height)
   {
       $mid = intval(($low +$height)/2);

       if ($array[$mid] == $searchKey)
       {
         return  $mid;
       }

       if ($array[$mid] >$searchKey){
           $height = $mid -1;
       }else{
           $low  =  $mid +1;
       }
   }
    return 0;
}


$arr = array(1,2,4,6,10,40,50,80,100,110);
echo binarySearch($arr,80);



