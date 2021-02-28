<?php
$a=array(array(1,2,3),array(4,5,6),array(7,8,9));
$b=array(array(7,8,9),array(4,5,6),array(1,2,3));

$m=count($a); 
$n=count($a[0]); 
$p=count($b);
$q=count($b[0]);
echo"the first matrix A :"."</br>";
for($row=0;$row<$m;$row++)
{
	for($col=0;$col<$n;$col++)
	{
		echo" ".$a[$row][$col];
	}
	echo "<br/>";
}
echo"the second  matrix B :"."</br>";
for($row=0;$row<$p;$row++)
{
	for($col=0;$col<$q;$col++)
	{
		echo" ".$b[$row][$col];
	}
	echo "<br/>";
}

echo" the Transpose for the first matrix A is :<br/>";
for($row=0;$row<$m;$row++)
{ 
	for($col=0;$col<$n;$col++)
	{
		echo" ".$a[$col][$row];
	}
	echo "<br/>";
}
echo" the Transpose for the first matrix B is :<br/>";
for($row=0;$row<$p;$row++)
{ 
	for($col=0;$col<$q;$col++)
	{
		echo" ".$b[$col][$row];
	}
	echo "<br/>";
}
echo"the addition of two matrices a and b is:<br/>";
if(($m===$p) and($n===$q))
{
		for($row=0;$row<3;$row++)
	{ 
		for($col=0;$col<3;$col++)
		{
			echo" ".$a[$row][$col]+$b[$row][$col]." ";
		}
		echo "<br/>";
	}
}
echo"the multiplication of mtrices a and b is :<br/>";
if($n===$p) 
{
	$result=array();
	for($i=0;$i<$m;$i++)
	{
		for($j=0;$j<$q;$j++)
		{
			$result[$i][$j]=0;
			for($k=0;$k<$n;$k++)
			{
				$result[$i][$j]+=$a[$i][$k]*$b[$k][$j];
			}
		}
	}
		for($row=0;$row<$m;$row++)
		{ 
			for($col=0;$col<$q;$col++)
			{
				echo" ".$result[$row][$col];
			}
			echo "<br/>";
		}
}
?>
