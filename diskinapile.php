<!--

Disks In a pile
Problem Statement
Rahul is playing a very interesting game. He has N disks ( each of equal radius). 
Every disk has a distinct number out of 1 to N associated with it. Disks are placed one over other in a single pile.

Rahul wants to sort this pile of disk in increasing order from top to bottom. But he has a very very special method of doing this. In a single step he can only choose one disk out of the pile and he can only put it at the top. 

Rahul wants to sort his pile of disks in minimum number of possible steps. So help Rahul in doing so. So don't have to show the actual steps just answer the minimum number of possible steps to sort the pile so that that Rahul can check whether he is doing his work right or wrong.

Contest ends on Sun June 30, 2013 at 23:59:00


Input/Output Specifications
Input Specification:
 
Your input will be an integer type array of size N containing integers from 1 to N in any random order which shows the position of disk from top to bottom. 


Output: 

Your output will be an integer type value that returns Minimum number of steps (as specified above) required to sort disk in a pile. 



Examples

1,3,2=====>>>>>2,1,3=====>>>>>1,2,3

For above example answer would be 2 steps. [ Minimum number of steps ]	

-->

<?php
   function get_order($input1)
	{
		$a = 1;
		for($i =0 ; $i < count($input1) ; $i++)
		{
			if($input1[$i] == $a)
			{
				$i = -1;
				$a ++;
			}
		}
		
		$count = 0;
		$k =count($input1);
		if($a == $k+1)
		{
			for($i =0 ; $i < count($input1) ; $i ++)
			{
				if($input1[$i] == $k)
				{
					for($j =$i+1 ;$j < count($input1);$j++)
					{
						if($input1[$j] == ($k-1))
						{
							$a = (array_splice($input1,$j , 1));
							array_unshift($input1,$a[0]);
							$count++;
							echo "<pre>";
							print_r($input1);
							break;	
						}
					}
					if($k <> 1)
					{
						$i = -1;
						$k --;
					}	
			
				}
			}
			return $count;
		}
		else
		{
			return -1;
		}
	}

$b = get_order(array(4,3,2,1,5));
echo $b;
?>
