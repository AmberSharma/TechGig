<!--
Smallest Greatest number
Problem Statement
Consider a number 2345. If you multiply its digits then you get the number 120. Now if you again multiply digits of 120 then you will get number 0 which is a one digit number. If I add digits of 2345 then I will get 14. If I add digits of 14 then I will get 5 which is a one digit number. 

Thus any number can be converted into two one digit numbers in some number of steps. You can see 2345 is converted to 0 by using multiplication of digits in 2 steps and it is converted to 5 by using addition of digits in 2 steps. Now consider any number N. Let us say that it can be converted by multiplying digits to a one digit number d1 in n1 steps and by adding digits to one digit number d2 in n2 steps.

Your task is to find smallest number greater than N and less than 1000000000 which can be converted by multiplying its digits to d1 in less than or equal to n1 steps and by adding its digits to d2 in less than or equal to n2 steps.

Contest ends on Tue May 21, 2013 at 23:00:00


Input/Output Specifications
Input Specification:

Your input will be the number N. (Integer type)


Output Specification:

Output will be the smallest number (integer type) , greater than N and less than 1000000000 which satisfies the given conditions in the question.

If no such number exists then output “-1” .


Examples
Example 1. If N = 2345 then the number 2354 is the smallest number greater than N and less than 1000000000 which satisfies the given conditions.

Example 2. If N = 2895 then the number 2904 is the smallest number greater than N and less than 1000000000 which satisfies the given conditions



-->
<?php
function multiply($number)
{
	$mul =1;
	$arr = str_split($number);
	for($i =0 ; $i < count($arr) ; $i ++)
	{
		$mul = $mul * $arr[$i];
	}
	return $mul;
}

function sum($number)
{
	return array_sum(str_split($number));
}
function smallest_number($input1)
{
	//echo count(str_split($input1));die;
	$n1 = 0;
	$n2 = 0;
	$mulinput = $input1;
	$suminput = $input1;
	if(count(str_split($mulinput)) == 1)
	{
		return -1;
	}
	while(count(str_split($mulinput)) <> 1)
	{
		$mulinput = multiply($mulinput);
		$n1 ++;
	}
	while(count(str_split($suminput)) <> 1)
	{
		$suminput = sum($suminput);
		$n2 ++;
	}
	for($i = $input1 + 1 ; $i < 1000000000 ; $i ++)
	{
		$n3 = 0;
		$n4 = 0;
		$mulinput1 = $i;
		$suminput1 = $i;
		while(count(str_split($mulinput1)) <> 1)
		{
			$mulinput1 = multiply($mulinput1);
			$n3 ++;
		}
		if(($n3 <= $n1) && ($mulinput1 == $mulinput))
		{
			while(count(str_split($suminput1)) <> 1)
			{
				$suminput1 = sum($suminput1);
				$n4 ++;
			}
		}
		if(($n4 <= $n2) && ($suminput1 == $suminput))
		{
			
			return $i;
		}
	}
	if($i == 1000000000)
	{
		return -1;
	}
}
$number = 9991;
$a = smallest_number($number);
echo $a;
//$mul = multiply($number);
//echo $mul;
//echo "<br/>";
//$sum = sum($number);
//echo $sum;
//echo array_sum(str_split($number));
//echo "<br/>";
//print_r(str_split($number));


?>


