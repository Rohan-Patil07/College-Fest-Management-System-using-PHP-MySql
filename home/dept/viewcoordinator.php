<?php
session_start();
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link href=css/main.css rel="stylesheet" type="text/css">
<link href=css/home.css rel="stylesheet" type="text/css">
<title>ODYSSEY21</title>
<style>
table{
border-collapse: collapse;
width:100%;
color:#588c7e;
text-align:center;
}
th{
background-color:#588c7e;
color: white;
}
tr:nth-child(even){
background-color:#f2f2f2;}
h2{
padding-top:30px;
text-align:center ;
text-decoration:underline;
}
.content_table{
padding-left:20px;
padding-right:20px;
}

</style>

</head>

<body>
<div class="body">



<div class="content_table">
<?php
	$conn = mysqli_connect("localhost","Rohan","codeblind","fest");
	$q=$_SESSION["deptid"];
	if ($conn-> connect_error)
	{
	die("connection failed:".$conn-> connect_error);
	}
	$sql = "SELECT cname,cid,did,phno,email,eventid,pass from coordinator where did='$q'";
	$result = $conn-> query($sql);
	
	if($result-> num_rows >0)
	{
	?>
	<div >
	<h2>Co-ordinator Details</h2>
	</div>
	<table cellpadding="8px" border="3px soild">
	<tr>
	<th>Name </th>
	<th>Cid</th>
	<th>Did</th>
	<th>Phno</th>
	<th>Email</th>
	<th>Event Id </th>
	<th>pass</th>
	
	</tr>

	<?php
		while ($row = $result-> fetch_assoc())
		{
			
			echo"<tr>";
			echo"<td>";echo $row["cname"]; echo"</td>";
			echo"<td>";echo $row["cid" ]; echo"</td>";
			echo"<td>";echo $row["did"]; echo"</td>";
			
			echo"<td>";echo $row["phno"]; echo"</td>";
			echo"<td>";echo $row["email" ]; echo"</td>";
			echo"<td>";echo $row["eventid"]; echo"</td>";
			echo"<td>";echo $row["pass"]; echo"</td>";
			
			echo"</tr>";
		}
		echo"</table>";
	}
	else
	{
		echo"No Records found !";
	}
	$conn-> close();
		
	?>
	
</table>
</div>
</div>
</body>
</html>
