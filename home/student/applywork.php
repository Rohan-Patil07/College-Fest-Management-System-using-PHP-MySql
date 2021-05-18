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
</head>
<body>
	
	<?php


		
	$usn = $_SESSION["studid"];
    $eeid = $_POST["eid"];

	$cconn = mysqli_connect("localhost","Rohan","codeblind","fest");
	if ($cconn-> connect_error)
	{
	die("connection failed:".$cconn-> connect_error);
	}
	
	
	$ssql = "INSERT INTO applied (usn,eid) VALUES (('$usn'), ('$eeid')) ";
		if(mysqli_query($cconn, $ssql)){
		echo "Applied successfully.";
	//	header("Location: mialt.php");
		} else{
			echo "Could not apply";
		}
	
	$cconn-> close();
		
	?>
	

</body>
</html>
