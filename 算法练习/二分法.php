<?php



function searchArray($array,$searchKey)
{
   $max =  count($array);

   if ($max<=0) {return  0;}
   $min = 0;
   while($min <= $max)
   {
      $mid = intval(($min+$max)/2);

      if ($array[$mid] == $searchKey)
          return $mid;

      if ($array[$mid] >$searchKey){
          $max = $mid-1;
      }else{
          $min = $mid+1;
      }

   }
   return  0;

}

$arr = array(1,2,4,6,10,40,50,80,100,110);
echo searchArray($arr,80);

