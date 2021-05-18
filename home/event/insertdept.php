<?php

$did = $_POST["did"];
$dname = $_POST["dname"];
$pass = $_POST["pass"];



/* connecting*/
$link = mysqli_connect("localhost", "Rohan", "codeblind", "fest");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
 $sql = "INSERT INTO dept (dname,	did,	pass) VALUES (('$dname'), ('$did'),('$pass'))";
 if(mysqli_query($link, $sql)){
    echo "dept Records inserted successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

// Close connection
mysqli_close($link);



?>
