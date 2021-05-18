<?php
// Start the session
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

.button {
	
    background-color: #4CAF50;
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
}

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
	$coid = $_SESSION["coid"];
	$conn = mysqli_connect("localhost","Rohan","codeblind","fest");
	if ($conn-> connect_error)
	{
	die("connection failed:".$conn-> connect_error);
	}
	$sql = "SELECT s.name,s.usn,s.phno,s.email,s.clg from student s, applied a, eventt e where s.usn=a.usn AND a.eid=e.eid AND e.cid='$coid'";
	$result = $conn-> query($sql);
	
	if($result-> num_rows >0)
	{
	?>
	<div >
	<h2>Student Details</h2>
	</div>
	<table cellpadding="8px" border="3px soild">
	<tr>
	<th>Name </th>
	<th>USN</th>
	<th>Phone No</th>
	<th>Email</th>
	<th>College</th>

	</tr>

	<?php
		while ($row = $result-> fetch_assoc())
		{
			
			echo"<tr>";
			echo"<td>";echo $row["name"]; echo"</td>";
			echo"<td>";echo $row["usn" ]; echo"</td>";
			echo"<td>";echo $row["phno"]; echo"</td>";
			echo"<td>";echo $row["email"]; echo"</td>";
			echo"<td>";echo $row["clg"]; echo"</td>";

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
<br><br>
<center>


</center>
</div>
</body>
</html>
