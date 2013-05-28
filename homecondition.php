<?php
   function house_condition($input1,$input2)
	{
		$house = array(1);
		for($i =1 ;$i < count($input1) ;$i ++)
		{
			$house[$i] = 0;
		}
		for($i =0 ; $i < count($input1) ;$i ++)
		{
			$sum = $house[$i -1] + $house[$i];
			if($sum <= $input1[$i])
			{
				if((array_sum(array($sum , $house[$i +1])) <> $input1[$i]) && ($i == count($input1) - 1))
				{
					if(array($sum , $house[$i +1]) == 0)
						return -1;
					else
						$house[$i]=1;

					 
				}
				if((array_sum(array($sum , $house[$i +1])) <> $input1[$i]) && ($i <> count($input1) - 1))
				{
						$house[$i +1]=1;
				}
				
			}
			else
			{
				return -1;
			}
		}
		if($house[$input2 - 1])
		return 1;
		else
		return 0;
	}

$arr =array(2,2,1,1,1);
$hno = 4;
$a = house_condition($arr,$hno);
echo $a;

?>

