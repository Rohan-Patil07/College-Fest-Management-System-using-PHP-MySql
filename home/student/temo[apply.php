<?php
// Start the session
session_start();
?>



<?php

$usn = $_SESSION["studid"];
$eid = $_POST["apply"];

	$conn = mysqli_connect("localhost","Rohan","codeblind","fest");
	if ($conn-> connect_error)
	{
	die("connection failed:".$conn-> connect_error);
	}



$sql = "select eid from eventt where eid='$eid' ";
$result = $conn-> query($sql);
	if($result-> num_rows >0)

	{
		$sql = "INSERT INTO applied (usn,eid) VALUES (('$usn'), ('$eid')) ";
		if(mysqli_query($link, $sql)){
		echo "Records inserted successfully.";
		} else{
			echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
		}
	}
	
		else
	{
		echo"No Records found !";

	}

 
 
 
// Close connection
$conn-> close();


?>