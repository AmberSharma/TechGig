<?php
	function calc( $a , $b , $c)
{
	if($b == "+")
	return ($a + $c);
	if($b == "-")
	return ($a - $c);
	if($b == "*")
	return ($a * $c);
	if($b == "/")
	return ($a / $c);
}
function  fetchnum($i , $j , $input1)
{
	$sum = 0;
	$count = 0;
	
	for($k = $i + 1 ; $k < $j ; $k ++)
	{
		if(!(is_numeric($input1[$k])))
		{
			$a = $input1[$k];
			$count = 1;
		}
		else if($count == 0)
		{
			$b = ($b * 10) + intval($input1[$k]) ;
		}
		else
		{
			$c = ($c * 10) + intval($input1[$k]) ;
		}
		
	}
	return $sum = calc($b , $a , $c);
}

   function solve_binarytree($input1)
	{
		$sum = 0;
		for($i = 0 ; $i < strlen($input1) ;$i ++)
		{
			if($input1[$i] == "(")
			{
				$b = 0;
				$c = 0;
				$count = 0;
				for($j= $i + 1 ; $j < strlen($input1) ; $j ++)
				{
					if($input1[$j] == "(")
					{
						break;
					}
					else if($input1[$j] == ")")
					{
						$sum = fetchnum($i , $j , $input1);
						echo $sum;
						$str = substr($input1, $i , (($j + 1) - $i));
						$input1 = str_replace($str,$sum,$input1);
						$i = -1;
						break;
					}
				}
			
			}
		
		
		}
		
		if(strlen($input1) != 0)
		{
			$sum = fetchnum(-1 , (strlen($input1)) , $input1);
			return  intval($sum);
		}
		else
		{
			return intval($sum);
		}
	}



$a = "((2+8)*9)-(5*(5+2))";

echo(solve_binarytree($a));
?>
