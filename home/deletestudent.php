<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link href=css/main.css rel="stylesheet" type="text/css">
<link href=css/home.css rel="stylesheet" type="text/css">
<title>ODYSSEY21</title>
</head>

<body>
<div class="body">


<form action="" method="POST">
<table align="center" style="padding-top:20px" cellpadding="10px" cellspacing="5px" >
<tr>
		<th colspan="4" align="center" > 
			<h2><u>Remove Student<u></h2>
		</th>
	</tr>
	<tr>
		<td  align="center">
			<label>Enter USN:</label>
		</td>
		<td >
			<input type="text" name="USN" placeholder=" Enter USN" required >
		</td>
		<td >
		<button value="search" name="search"> delete</button>
		</td>
	</tr>	
	</table>
<?php

	include ("connection.php");
	if ($conn-> connect_error)
	{
	die("connection failed:".$conn-> connect_error);
	}
	
	if(isset($_POST['search']))
	{
		$USN=$_POST['USN'];
		
		$sql = "delete from student where usn=$USN";
		$result = $conn-> query($sql);
		echo "Record updated";
	header("Location: home.html");
	}
	?>
	</form>
</div>

</body>
</html>