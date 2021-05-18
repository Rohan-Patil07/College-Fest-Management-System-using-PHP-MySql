<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link href=css/main.css rel="stylesheet" type="text/css">
<link href=css/home.css rel="stylesheet" type="text/css">
<title>ODYSSEY21/title>
</head>

<body>
<div class="body">


<?php
function yo($id)
{
	include ("connection.php");

		
	if ($conn-> connect_error)
	{
	die("connection failed:".$conn-> connect_error);
	}
	
	if(isset($_POST['search']))
	{
		//$USN=$_POST['USN'];
		echo"$id";
		$sql = "delete from eventt where eid=$id";
		$result = $conn-> query($sql);
		echo "Record updated";
		header("Location: home.html");
	
	}
}
	?>
	
</div>

</body>
</html>