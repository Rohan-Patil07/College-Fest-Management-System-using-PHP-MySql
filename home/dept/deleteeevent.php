<?php
session_start();
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>ODYSSEY21</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
<style>
 div{border-style: groove;}
.button {
    background-color: #ff66cc;
    border: none;
    color: white;
    padding: 15px 20px;
    text-align: center;
    text-decoration: bold;
    display: inline-block;
    font-size: 15px;
    margin: 4px 2px;
    cursor: pointer;
}
.col{color:#DC143C;
}
 </style>

</head>


<body>
<div class="body">

	<div class="container-contact100">
		<div class="wrap-contact100">

<form action="" method="POST">
<center>
<h1 class="col">Remove an event</h1><br><br>
<h5>Enter Event ID</h5>
<div>
			<input type="text" name="USN" placeholder=" Enter Event ID" required ><br><br>
	</div>	<br><br>
	<input type="button" class="button" value="search" name="search">
	</center>
<?php

	include ("connection.php");
	if ($conn-> connect_error)
	{
	die("connection failed:".$conn-> connect_error);
	}
	
	if(isset($_POST['search']))
	{
		$USN=$_POST['USN'];
			$tdid = $_SESSION["deptid"];
		
		$sql = "delete from eventt where eid=$USN AND did='$tdid'";
		$result = $conn-> query($sql);
		echo "Record updated";
		header("Location: home.html");
	
	}
	?>
	</form>
</div>

</body>
</html>