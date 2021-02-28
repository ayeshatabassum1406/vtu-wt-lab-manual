<html>
	<head>
		<title>program 8A</title>
		<style>
		table,td,th
		{
			border:2px solid black;
			width:50%;
			
			text-align:center;
			background-color:darkgray;
		}
		table{
			margin:auto;
		}
		input,p{
			text-align:right;
		}
		</style>
		

	</head>
<body>
	<form method="POST">
		<table>
			<caption><h2>SIMPLE CALCULATOR </h2></caption>
			<tr>
			<td>first number:</td>
			<td><input type="text" name="num1" /></td>
			<td rowspan="2"><input type="submit"  name="submit" value="calculate"></td>
			</tr>
			<tr>
			<td>second number:</td>
			<td><input type="text"  name="num2"/></td></tr>
		<?php
	
		if(isset($_POST['submit']))
			
		{
			$num1=$_POST['num1'];
			$num2=$_POST['num2'];
			if(is_numeric($num1) and is_numeric($num2)== True)
			{
			
				echo"<tr><td>addition:</td><td><p>".($num1+$num2)."</p></td>";
				echo"<tr><td>subtraction:</td><td><p>".($num1-$num2)."</p></td>";
				echo"<tr><td>multiplication:</td><td><p>".($num1*$num2)."</p></td>";
				if($num2!=0)
				{
					
					echo"<tr><td>division:</td><td><p>".($num1/$num2)."</p></td>";
				}
				else
				{
					echo"<tr><td>division:</td><td><p>cannot divide by zero</p></td>";
				
				}
			}
		    else
			{
				echo "<script type='text/javascript'> 
				alert('enter valid number');
				</script>";
			}
		}
		
		
	?>

		</table>
	</form>

	
	
	
</body>
</html>
