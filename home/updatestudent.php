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
			<h2><u>Student Edit Form<u></h2>
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
		<button value="search" name="search"> Search</button>
		</td>
	</tr>	
	
	
<?php
	include ("connection.php");
	if ($conn-> connect_error)
	{
	die("connection failed:".$conn-> connect_error);
	}
	
	if(isset($_POST['search']))
	{
		$USN=$_POST['USN'];
		
		$sql = "SELECT * from student where usn=$USN";
		$result = $conn-> query($sql);
		while($row= mysqli_fetch_array($result))
		{
	
	
	?>
		<form action="" method="POST">
			<table align="center" style="padding-top:20px" cellpadding="10px" cellspacing="5px" >
			<tr hidden>
				<td align="center">
					<label>Enter USN:</label>
				</td>
				<td >
					<input type="text" name="USN"value="<?php echo $row['usn'] ?>" hidden />
				</td>
			</tr>	

			<tr>
				<td>
					<label>Student Name:</label>
				</td>
				<td>
					<input type="text" name="sname" value="<?php echo $row['name'] ?>" />
				</td>
		
							</tr>
	
			
	    	<tr>
				<td>
					<label>Phone Number</label>
				</td>
				<td>
					<input type="text" name="phoneno" value="<?php echo $row['phno'] ?>"/>
				</td>
		
				<td>
					<label>Email:</label>
				</td>
				<td>
					<input type="text" name="email" value="<?php echo $row['email'] ?>"/>
				</td>
			</tr>
	
			<tr>
				<td>
					<label>College:</label>
				</td>
				<td>
					<input type="text" name="college" value="<?php echo $row['clg'] ?>"/>
				</td>
		
			</tr>
			<tr style="height:20px">
			</tr>
	
			<tr align="center">
				<td colspan="4">
				<button class="btn-sub" value="submit" name="save">Save</button>
					     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;		
					<button class="btn-can" name="cancel">cancle</button>
				</td>
		
			</tr>
		
		
	<?php
		}
	}
	if(isset($_POST['save']))
	{
		$USN=$_POST['USN'];
		$sname=$_POST['sname'];
		$phoneno=$_POST['phoneno'];
		$email=$_POST['email'];
		$college=$_POST['college'];
		

		include ("connection.php");
		if ($conn-> connect_error)
		{
			die("connection failed:".$conn-> connect_error);
		}
	
		$sql = "Update student set usn=$USN,name='$sname',phno='$phoneno',email='$email',clg='$college', where usn= '$USN'";       
		$result = $conn-> query($sql);
	 echo "Record updated";
	header("Location: home.html");
	}
	
	
	?>
		</table>
	</form>
</div>
</div>
</body>
</html>
