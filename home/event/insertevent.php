<?php

$eid = $_POST["eid"];
$ename = $_POST["ename"];
$desc = $_POST["desc"];
$did = $_POST["did"];
$cid = $_POST["cid"];
$cname = $_POST["cname"];
$phno = $_POST["phno"];
$email = $_POST["email"];
$loc = $_POST["loc"];
$stime = $_POST["stime"];
$etime = $_POST["etime"];
$fee = $_POST["fee"];
$first = $_POST["first"];
$second = $_POST["second"];
$third = $_POST["third"];
$f="first";
$s="second";
$t="third";
$u=0;




/* connecting*/
$link = mysqli_connect("localhost", "Rohan", "codeblind", "fest");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
 $sql = "INSERT INTO coordinator (cname,	cid,	did,	phno,	email, eventid) VALUES (('$cname'), ('$cid'),('$did'),('$phno'),('$email'),('$eid'))";
 if(mysqli_query($link, $sql)){
    echo "Co=ordinator Records inserted successfully.\n";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

 $sql = "INSERT INTO eventt (name,	eid	,descp	,cid	,did	,loc	,stime	,etime,	fee	) VALUES (('$ename'), ('$eid'),('$desc'),('$cid'),('$did'), ('$loc'),('$stime'),('$etime'),('$fee') )";
 
if(mysqli_query($link, $sql)){
    echo "Event Records inserted successfully.\n";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
 
  $sql = "INSERT INTO win (eid, place,	price) VALUES (('$eid'),  ('$f') ,('$first'))";
 if(mysqli_query($link, $sql)){
    echo "WIN \n";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
 
 
  $sql = "INSERT INTO win (eid,	place,	price) VALUES (('$eid'),  ('$s') ,('$second'))";
 if(mysqli_query($link, $sql)){
    echo "Records";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}


  $sql = "INSERT INTO win (eid,	place,	price) VALUES (('$eid'),  ('$t') ,('$third'))";
 if(mysqli_query($link, $sql)){
    echo " inserted successfully. ";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
 
// Close connection
mysqli_close($link);



?>
