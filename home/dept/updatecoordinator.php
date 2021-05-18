<?php
session_start();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>Utsav</title>
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
<style> table{ border-spacing: 30px; border-collapse: separate; border=2;}
.t{border:1px solid black;
align:center;}
lable{
	color:blue;
text-size:30px;
}



.button {
	
    background-color: #ff66cc;
    border: none;
    color: white;
    padding: 5px 10px;
    text-align: center;
    text-decoration: bold;
    display: inline-block;
    font-size: 15px;
    margin: 2px 2px;
    cursor: pointer;
}

 </style>

</head>

<body>
<div class="body">



	<div class="container-contact100">
		<div class="wrap-contact100">
	<h3><u>Co-Ordinator_Edit_Form<u></h3><br>
<form class="contact100-form validate-form" action="" method="POST">
<table align="center" style="padding-top:20px" cellpadding="10px" cellspacing="20px "  >
<tr>
		
	
		<td  align="center">
			<lable><b>Enter_ID</b></lable>
		</td>
		<td class="t">
					<input type="text" name="id"/>
			
			</td>
		<td >
		<button class="button" value="search" name="search"> Search</button>
		</td>
	</tr>
</table>	
	</form>
	
<?php

	include ("connection.php");
	if ($conn-> connect_error)
	{
	die("connection failed:".$conn-> connect_error);
	}
	
	
	if(isset($_POST['search']))
	{ 
		$id=$_POST['id'];
		$tdid = $_SESSION["deptid"];
		$sql = "SELECT * from coordinator where cid=$id and did='$tdid'" ;
		$result = $conn-> query($sql);
		while($row= mysqli_fetch_array($result))
		{
	?>
		<form action="" method="POST">
			<table align="center" style="padding-top:20px" cellpadding="10px" cellspacing="5px" >
			<tr >
				<td align="center">
					<label>Co-Ordinator Name</label>
				</td>
				<td class="t">
					<input type="text" name="cname"value="<?php echo $row['cname'] ?>"  />
				</td>
			</tr>	

			
	<tr>
				<td>
					<label>Co-Ordinator Id</label>
				</td>
				<td class="t">
					<input type="text" name="cid" value="<?php echo $row['cid'] ?>"  readonly="readonly" />
				</td>
		</tr>
			
			<tr>
				<td>
					<label>Department Id</label>
				</td>
				<td class="t">
					<input type="text" name="did" value="<?php echo $row['did']?>" readonly="readonly" />
				</td>
		
			</tr>	
	
	<tr>
		<td>
					<label>Event Id</label>
				</td>
				<td class="t">
					<input type="text" name="eid" value="<?php echo $row['eventid'] ?>" readonly="readonly"  />
				</td>
	
	</tr>
	
	<tr>
				<td>
					<label>Email</label>
				</td>
				<td class="t">
					<input type="text" name="email" value="<?php echo $row['email'] ?>"  />
				</td>
		</tr>
		<tr>
		<td>
					<label>Phone No</label>
				</td>
				<td class="t">
					<input type="text" name="phno" value="<?php echo $row['phno'] ?>"  />
				</td>
	
	</tr>
			
			<tr>
				<td>
					<label>Pass</label>
				</td>
				<td class="t">
					<input type="text" name="pass" value="<?php echo $row['pass'] ?>" />
				</td>
		
			</tr>
			
		<tr style="height:20px">
			</tr>
	
			<tr align="center">
				<td colspan="4">
				<button class="button"  name="save">Save<button>
					     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;		
					<input type= "button" class="button" name="cancel" value="cancle">
				</td>
		
			</tr>
		
		<?php
		}
	}
	if(isset($_POST['save']))
	{	$cid=$_POST['cid'];
		$cname=$_POST['cname'];
		$email=$_POST['email'];
		$phno=$_POST['phno'];
		$pass=$_POST['pass'];
		
		
		include ("connection.php");
		if ($conn-> connect_error)
		{
			die("connection failed:".$conn-> connect_error);
		}
	
		$sql = "Update coordinator set cname='$cname',email='$email',phno='$phno',pass='$pass' where cid='$cid'";       
		$result = $conn-> query($sql);
	 echo "Record updated";
	 header("Location: depthome.html");

	}
	
	
	?>

		</table>
	</form>



</div>
</body>
<head>