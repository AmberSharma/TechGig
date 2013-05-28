<!--
KFC Outlet..!
Problem Statement
KFC opened just a new outlet. The problem is that its very outer of the main city. A long highway leads to that KFC outlet. Due to very outer position of outlet almost no one stops in it, hence its now unprofitable to hold it now. One of the main reason is that they have not advertised well for their outlet. There are exactly N advertising boards on the highway from main city to this new KFC outlet. Now KFC want to advertise on some of these advertising boards ( Definitely advertising on every board cost some money) .

KFC strategy is very clear, they want that at least 'K' KFC advertisement should be there among M consecutive advertising boards. But at the same time KFC want to pay minimum for its advertisement because already it has spent a lot on its outlet.

Now your job is to help KFC and tell KFC the number of ways different ways in which they can place their advertisement on there boards ( definitely minimum number of advertisement) and still meeting its strategy.
Contest ends on Thu May 30, 2013 at 23:59:00


Input/Output Specifications
Input Specification:

Your input will be Three integers values. 
N advertising boards on the highway from main city to this new KFC outlet
at least 'K' KFC advertisement should be there among M consecutive advertising boards.
N, M and K (1 <= K <= M <= 50, M <= N <= 10^9)

Output Specification:
Your output will be total number of possible ways modulo 1000000007.
if the input values are invalid then your output will be "-1".


Examples
Example 1. If N, M , K values are 3, 2, 1 respectively then there is only one way for minimum cost


Example 2.

If N M & k 
values are 6, 3, 2 respectively then there is only 6 way for minimum cost.
-->
<?php
	function factorial($num)
	{
		
		$fact = 1;
    		for($i = 1; $i <= $num ;$i++)
        		$fact = $fact * $i;
			//echo $fact;
    			return $fact;
	}
   function min_boards($input1,$input2,$input3)
	{
		if(($input3 < 1) || ($input3 > $input2) || ($input2 > 50) || ($input2 > $input1) || ($input1 > 1000000000))
		{
			return -1;
		}
		$way = 0 ;
		for($i =0 ; $i <= $input1 ;)
		{
			$input1 = $input1 - $input2;
			$way = $way + (factorial($input2)/factorial($input3));
			$i = $i + $input2;
			echo $way;
		}
		return ($way % 1000000007);
	}

$a = min_boards(7,3,1);
echo $a;
?>
