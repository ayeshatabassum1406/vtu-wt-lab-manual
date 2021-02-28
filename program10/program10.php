<!DOCTYPE html>
<html>
<head>
	<title>student records</title>
</head>
<body>
	<?php 
		$a=[];// array to store all usn
		$servername="localhost";
		$username="root";
		$password="";
		$dbname="program10student"; #program10student db sql in xampp
		$conn=mysqli_connect($servername,$username,$password,$dbname) or die(mysqli_connect_error());
		$sql="select * from students"; # here students is table in program10student
		$result=mysqli_query($conn,$sql);
		echo "<br>";
		echo"<center><h1>before sorting</h1></center>";
		echo "<table border='1' align='center'>";
		echo"<tr>";
		echo"<th>usn</th><th>name</th><th>address</th></tr>";
		if(mysqli_num_rows($result)>0)
		{
			while($row=mysqli_fetch_assoc($result))
			{
				echo"<tr>";
				echo"<td>".$row["USN"]."</td>";
				echo"<td>".$row["name"]."</td>";
				echo"<td>".$row["ADDRESS"]."</td></tr>";
				array_push($a,$row["USN"]);
			}
			echo"</table>";
		}
		else
		{
			echo"<h1>Table is empty</h1>";
			echo"</table>";
		}
		$n=count($a);# here a is 4
		for($i=0;$i<($n-1);$i++)
		{
			for($j=$i+1;$j<$n;$j++)
			{
				if($a[$j]<$a[$i])
				{
					$temp=$a[$i];
					$a[$i]=$a[$j];
					$a[$j]=$temp;
				}
			}
		}
		$b=[];
		$c=[];
		$result=mysqli_query($conn,$sql);
		if(mysqli_num_rows($result)>0)
		{
			while($row=mysqli_fetch_assoc($result))#  fetching UNSORTED from db freashly
				
			{
				for($i=0;$i<$n;$i++)
				{
					if($row["USN"]==$a[$i])
					{
						$b[$i]=$row["name"];
						$c[$i]=$row["ADDRESS"];
					}
				}
			}
		}
		
		echo"<br>";
echo"<center><h1>After sorting</h1></center>";
echo"<table border='1' align='center'>";
echo"<tr>";
echo"<th>usn</th><th>Name</th><th>address</th></tr>";
echo"<br>";
for($i=0;$i<$n;$i++)
{
	echo"<tr>";
	echo"<td>",$a[$i]."</td>";
	echo"<td>".$b[$i]."</td>";
	echo"<td>".$c[$i]."</td></tr>";
}
echo"</table>";
?>
</body>
</html>
