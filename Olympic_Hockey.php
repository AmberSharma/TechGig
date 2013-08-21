<!--
Olympic Hockey Qualifiers
Problem Statement

The Men’s hockey Qualifying Tournament for the 2012 Summer Olympics is the qualification tournament to determine the final spots for the 2012 Summer Olympics. The qualifying tournament is to be held in India in 2012. Only the winners from qualifying tournament will earn a berth in the 2012 Summer Olympics.


The standing in the tournament is based on the number of points won by the teams, and the distribution of points is done the usual way. That is, when a team’s wins a match, it receives 3 points; if the match ends in a draw, both teams receive 1 point; and the loser doesn’t receive any points.


Given the current standing of the teams and the number of teams participating in the qualifying tournament, your task is to determine how many matches ended in a draw till the moment.

Contest ends on Sun April 1, 2012 at 23:59:59


Input/Output Specifications
Input Specs
Your program must read two arguments (t, string1), where
t is the number of test cases, where (1<=t<=100)
string1 is a string that provides the details of each test case separated by a comma as shown below
test_case1, test_case2, test_case3, ....
Each test case start and end with brackets ( ). Within the brackets the following information is provided separated by a comma
Count_of_ participating teams, Count_of_ played matches, team_details where 
Count_of_ participating teams (N) provides you the number of participating teams (0 ≤ N ≤ 10) 
Count_of_ played matches (M) provides you the number of played matches (0 ≤ M≤ 100). 
Team_details provides you the following information of each team separated by comma (,). It starts and ends with braces { }
(team_points)
Team_points (S) provides the number of points that the team obtained till the moment starting with team 1, team 2, team 3, …….
{S1,S2,S3})
Output Specs
For each one of the test cases, your program should print a single line containing an integer, representing the quantity of matches that ended in a draw till the moment.



Examples
Sample Input
(3,3,{3,3,3})
(3,3,{5,1,1})

Sample Output
0
2
-->
<?php
   function match_no($input1,$input2)
	{
		$input2 = ltrim($input2 , "(");
		$input2 = rtrim($input2 , ")");
		$input2 = explode("),(" , $input2);
		$k =0;
		$count = 1;
		$sum = 0;
		for($i = 0 ; $i < count($input2) ;$i ++)
		{
			$input2[$i]  = str_replace(",{" ,"," ,$input2[$i]);
			$input2[$i] = trim($input2[$i] , "}");
			$value[] = explode("," , $input2[$i]);
		}
		for($j = 0 ;$j < count($value) ; $j ++)
		{
			for($i = 2 ; $i < count($value[$j]) ; $i ++)
			{
				$sum += intval($value[$j][$i]);
			}
			$a[] = ($value[$j][1] * 3)- $sum;
			$sum = 0;
		}
		return $a;
	}
$a = "(3,3,{3,3,3}),(3,3,{4,1,3})";
$b=match_no(2,$a);
print_r($b);
?>


