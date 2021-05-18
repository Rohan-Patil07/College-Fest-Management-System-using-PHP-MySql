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
p.round1 {
    border: 2px solid red;
    border-radius: 5px;
}

lable.r {
    border: 2px solid #4CAF50;
    border-radius: 5px;
     padding-top: 10px;
    padding-right: 3px;
    padding-bottom: 10px;
    padding-left: 8px;
    

	}
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
width:70%;
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
<center>


<div class="content_table">
<?php

	$coid = $_SESSION["coid"];
	$conn = mysqli_connect("localhost","Rohan","codeblind","fest");
	if ($conn-> connect_error)
	{
	die("connection failed:".$conn-> connect_error);
	}
	$sql = "SELECT e.name,eid,descp,loc,stime,etime,fee,d.dname,c.cname,c.phno,c.email from eventt e,dept d,coordinator c where e.did=d.did AND e.cid=c.cid AND e.cid='$coid'";
	$result = $conn-> query($sql);

	
	if($result-> num_rows >0)
	{
	?>
	<div >
	<h2>Event Details</h2><br>
	</div>
	<table cellpadding="8px" border="3px soild" >
	<tr>
	<th>Event</th>
	<th>Details</th>
	</tr>
	
	<?php
	include("edit.php");
		while ($row = $result-> fetch_assoc() )
		{	
			$i=$row["eid" ];
			echo"<tr> <td>Event Name :</td> <td>";echo $row["name"]; echo"</td></tr>";
			echo"<tr> <td>Event ID:</td><td>";echo $row["eid" ]; echo"</td></tr>";
			echo"<tr> <td>Description :</td><td>";echo $row["descp"]; echo"</td></tr>";
			echo"<tr> <td>Location :</td><td>";echo $row["loc"]; echo"</td></tr>";
			echo"<tr> <td>Event Start time :</td><td>";echo $row["stime"]; echo"</td></tr>";
			echo"<tr> <td>Event End time :</td><td>";echo $row["etime"]; echo"</td></tr>";
			echo"<tr> <td>Fee :</td><td>";echo $row["fee"]; echo"</td></tr>";
			echo"<tr> <td>Department :</td><td>";echo $row["dname"]; echo"</td></tr>";
			echo"<tr> <td>Co-ordinator :</td><td>";echo $row["cname"]; echo"</td></tr>";
			echo"<tr> <td>Contact No:</td><td>";echo $row["phno"]; echo"</td></tr>";
			echo"<tr> <td>Email Id:</td><td>";echo $row["email"]; echo"</td></tr>";

		}
	
	
	$cconn = mysqli_connect("localhost","Rohan","codeblind","fest");
	if ($cconn-> connect_error)
	{
	die("connection failed:".$conn-> connect_error);
	}
	$ssql = "SELECT place,price from win w, eventt e where e.eid=w.eid and e.cid='$coid'";
	$rresult = $cconn-> query($ssql);


while ($rrow = $rresult-> fetch_assoc() )
		{	
			echo"<tr> <td>"; echo $rrow["place"]; echo"</td> <td>"; echo $rrow["price"]; echo"</td></tr>";
		}
	

	
		echo"</table>";
		
	
	}
	else
	{
		echo"No Records found !";

	}
	$conn-> close();
		
	?>
	

</div>
</div>
</center>

<center>
<br><br>


</center>


</body>
</html>
