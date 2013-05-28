<!--
The Great Indian Programming League 2013 - May Edition

Partition Problem

Problem Statement
You are given a set of positive integers. your task is to solve partition problem. 

Lets define the partition problem.

Partition problem is the task of deciding whether a given multiset of positive integers can be partitioned into two subsets S1 and S2 such that the sum of the elements in S1 equals the sum of the elements in S2.

Contest ends on Thu May 30, 2013 at 23:59:00


Input/Output Specifications

Input Specification:
Your input will be integer array of positive Integers.  

Output Specification:
your output will be string type.
Yes – if it can be divided into two subsets of equal sum .(Case Senstive)
No – If it can't be divided into two subsets of equal sum .(Case Senstive)
Invalid - if integer array containing any other type of integers.(except positive Integer.)



Examples
Example 1:
array[] = {1, 5, 11, 5}
Output: Yes
This array can be divided into to subsets {1, 5, 5} and {11} these two have equal sum.

Example 2:
array[] = {1, 5, 3}
Output: No
This array cant be divided into two subsets of equal sum.
-->
<?php


   function partition($input1)
	{
		for($i = 0 ; $i < count($input1) ; $i ++)
		{
			if ((!is_int($input1[$i])) || ($input1[$i] < 1))
			{
  				return "Invalid";
			}
		}
		$sum = array_sum($input1);
		
		if($sum % 2 == 0)
		{
			
			for($i = 0 ; $i < count($input1) ; $i ++)
			{
				$count = 1;
				for($j = $i ; $j < count($input1) ; $j ++)
				{
					if($i == $j)
					{
						if(array_sum(array($input1[$i])) == ($sum/2) )
						{
							return "Yes";
						}
						
					}
					else
					{
						$arr = array();
						
						for($k = $i; $k <= $j ; $k++)
						{
							$new = $input1;
							//print_r($new);
							$arr = array_splice($new , $i , $count);
							$arr[] = $input1[$j];
						}
						if(array_sum($arr) == ($sum/2))
						{
								return "Yes";
						}
						
						
					}
						
					
					if($j == count($input1)-1)
					{
						$j = $i  + $count;
						$count++;
					}
					
				}
			}
			if($i == count($input1))
			{
				return "No";
			}	
		}
		else
		{
			return "No";
		}
	}



$arr = array(1, 5, 3);
$a = partition($arr);
echo $a;
?>

