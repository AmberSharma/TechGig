<!--
Fashion Contest 2013
Problem Statement
There is a fashion contest running in the city and n number of panelists who are judging the contest. The Number of Judges in the contest can be 0 or any odd number(1,3,5,7......) ranging from 0 to 20. These judges are sitting in a row, holding a scorecard that displays scores obtained by each contestant ranging from 0 to m. There are two anchors standing in front of the judge who is sitting in the centre of the row.

Now, we want to calculate total score of a contestant given by judges.

First of all, the score given by center judge will be added to the total score. Secondly, the two anchors starts moving from centre position and one goes towards left (i.e. toward 1st judge) and one goes towards right (i.e. towards nth judge). They step towards their direction to new position together and they tell each other the score given by the judge. Now, If the scores given by judges are same then that score gets added to total score of that contestant. But if scores are not same then nothing is added to total score.

Similarly, anchors keep on moving to their directions and keep comparing the scores given by judges and adding score to the total score, if matches.

Contest ends on Fri February 1, 2013 at 23:59:59


Input/Output Specifications
Input Specifications :

Scores contained by individual n number of judges. Scores will be an integer array

Output Specifications:

Total score of contestant is the output. Return the output from the function as integer only


Examples
We have 5 judges and each are having scores 5,6,7,3,5

Output : 7+5=12

Here Anchors start walking from 3rd position. So they will take score 7 in the total. Then one anchor start moving to left and other to right. Now the scores they got is 6 and 3 but they are differnt so it will not count in total. Again they start moving, this time score given by both judges is 5 and 5, so it will count in total score. So the total score is 7+5=12.
-->
<?php
function check($input1)
{
	//print_r($input1);
	$mid = ((count($input1) -  1) /2);
	if((count($input1) % 2 == 1) || (count($input1) == 0))
	{
		$a = $mid;
		$b = $mid;
		$sum = 0;
		for($i = $mid ; $i < (count($input1)) ; $i ++)
		{
		
			if($i == $mid)
			{
			
				$sum +=  $input1[$i];
			}
			else if($input1[$a] == $input1[$b])
			{
				$sum +=  $input1[$i];
			}
			$a --;
			$b ++;
		}
		return $sum;
	}
	else
	{
		return -1;
	}
}
echo(check(array()));
?>
