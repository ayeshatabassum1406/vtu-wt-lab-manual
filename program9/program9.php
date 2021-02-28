<?php
$states="Mississippi Alabama Texas Massachusetts Kansas";
$stateslist=[];
$states1=explode(' ',$states);

echo" original array:<br>";
foreach($states1 as $i => $value)
print("STATES[$i]=$value<br>");

foreach($states1 as $state)
{
	if(preg_match('/xas$/',($state)))  
	$stateslist[0]=($state);
}
foreach($states1 as $state)
{
	if(preg_match('/^k.*s$/i',($state))) 
	$stateslist[1]=($state);
}
foreach($states1 as $state)
{
	if(preg_match('/^M.*s$/',($state)))  
	$stateslist[2]=($state);
}
foreach($states1 as $state)
{
	if(preg_match('/a$/',($state)))  
	
	$stateslist[3]=($state);
}
echo "<br><br> Resultant Array :<br>";
foreach($stateslist as $array => $value)
print("STATES[$array]=$value<br>");

?>
