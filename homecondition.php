<!--
Visit a Colony
Problem Statement
In a colony all houses are in a single line. We call a house either in a good condition or in a bad condition. If a house is good its score is 1 otherwise 0. We decided to perform the scoring of houses in a different way. 
We not only consider that particular house but also the 2 neighboring house.

New scoring strategy- The Score of a house if affected by three house, that house and its two neighbors

Score-1 : If any of the three houses is in good condition 
Score-2 : if any of the two houses is in good condition 
Score-3 : if all the three houses are in good condition 

Now Josheph has the score list of all the houses ( according to new strategy ) and he wants to know what is the condition ( good or bad) of his house just seeing the score of the houses. He assumes that first house is in good condition.

Contest ends on Thu May 30, 2013 at 23:59:00


Input/Output Specifications
Input Specification:

(1) An integer array of score of all the houses in order 
(2) House number of Josheph 

Output Specification: 

If house condition of Josheph is good then your output will be 1.
If house condition of Josheph is bad then your output will be 0.
If assumption about house1 doesnt match the score array then your output will be -1.


Examples
Let say the score list is as follows 

{2,2,1,1,1} 

Now if Josheph's house number is 4 
His Condition is bad (0).



 
-->
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

