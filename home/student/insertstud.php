<?php
// Start the session
session_start();
?>

<?php

$usn = $_POST["usn"];
$name = $_POST["name"];
$phno = $_POST["phno"];
$email = $_POST["email"];
$pass = $_POST["pass"];
$clg = $_POST["clg"];



/* connecting*/
$link = mysqli_connect("localhost", "Rohan", "codeblind", "fest");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Attempt insert query execution
$sql = "INSERT INTO student (name,usn,pass,phno,email,clg) VALUES (('$name'), ('$usn'),('$pass'),('$phno'),('$email'),('$clg'))";
// $sql = "call insertStudentData('$name', '$usn', '$pass', '$phno', '$email', '$clg');
if(mysqli_query($link, $sql))
{
    echo "Records inserted successfully.";
	  $_SESSION['studid']=$usn;
		  $_SESSION['studname']= $name;
	header("location:studhome.php");
}
else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

 
 
// Close connection
mysqli_close($link);



?>
