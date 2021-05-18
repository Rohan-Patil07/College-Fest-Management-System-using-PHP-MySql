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
	$conn = mysqli_connect("localhost","Rohan","codeblind","fest");
	if ($conn-> connect_error)
	{
	die("connection failed:".$conn-> connect_error);
	}
	$sql = "SELECT e.name,eid,descp,loc,stime,etime,fee,d.dname,c.cname,c.phno from eventt e,dept d,coordinator c where e.did=d.did AND e.cid=c.cid";
	$result = $conn-> query($sql);

	
	if($result-> num_rows >0)
	{
	?>
	<div >
	<h2>Event Details</h2><br>
	</div>
	
	<div>
	<table cellpadding="100"  border="5px soild">
	<tr>
	<th>Event Name </th>
	<th>EventID</th>
	<th>Description</th>	
	<th>Location</th>
	<th>From</th>
	<th>To</th>
	<th>Fee</th>	
	<th>Department</th>
	<th>Co-ordinator</th>
	<th>Contact</th>
	</tr>
	
	<?php
	// include("edit.php");
		while ($row = $result-> fetch_assoc() )
		{	
			$i=$row["eid" ];
			echo"<tr>";
			echo"<td>";echo $row["name"]; echo"</td>";
			echo"<td>";echo $row["eid" ]; echo"</td>";
			echo"<td>";echo $row["descp"]; echo"</td>";
			echo"<td>";echo $row["loc"]; echo"</td>";
			echo"<td>";echo $row["stime"]; echo"</td>";
			echo"<td>";echo $row["etime"]; echo"</td>";
			echo"<td>";echo $row["fee"]; echo"</td>";
			echo"<td>";echo $row["dname"]; echo"</td>";
			echo"<td>";echo $row["cname"]; echo"</td>";
			echo"<td>";echo $row["phno"]; echo"</td>";
			
		}
		echo"</table></div>";
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
<center>
<br><br>
<form action="apply.php" method="post">
<input type="text" name="eid" >
<input type="submit" name="apply" value="Apply Now" class="button">
</form>
</center>


</body>
</html>
