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
<link rel="shortcut icon" href="/images/favicon.ico" type="image/x-icon">
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
// $usn = $_SESSION["studid"];
$eeid = $_POST["eid"];
	$conn = mysqli_connect("localhost","Rohan","codeblind","fest");
	if ($conn-> connect_error)
	{
	die("connection failed:".$conn-> connect_error);
	}
	$sql = "SELECT e.name,eid,descp,loc,stime,etime,fee,d.dname,c.cname,c.phno,c.email from eventt e,dept d,coordinator c where e.did=d.did AND e.cid=c.cid AND eid='$eeid'";
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
$usn = $_SESSION["studid"];
$eeid = $_POST["eid"];


	while ($row = $result-> fetch_assoc() )
		{	
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
	die("connection failed:".$cconn-> connect_error);
	}
	$ssql = "SELECT place,price from win where eid='$eeid'";
	$rresult = $cconn-> query($ssql);


while ($rrow = $rresult-> fetch_assoc() )
		{	
			echo"<tr> <td>"; echo $rrow["place"]; echo"</td> <td>"; echo $rrow["price"]; echo"</td></tr>";
		}
	
	$ssql = "INSERT INTO applied (usn,eid) VALUES (('$usn'), ('$eeid')) ";
		if(mysqli_query($cconn, $ssql)){
		echo "Applied successfully.";
		echo"<br>";
		$_SESSION['eide']=$eeid;
		
		

	// Start the session

$sid = $_SESSION["studid"];
$seid = $_SESSION["eide"];

$onn = mysqli_connect("localhost","Rohan","codeblind","fest");
	if ($onn-> connect_error)
	{
	die("connection failed:".$onn-> connect_error);
	}


$str = "SELECT name,email FROM student WHERE usn='$sid'";
//$result = mysql_query($str) or die('SQL Error :: '.mysql_error());
	$result = $onn-> query($str) ;
//$row = mysql_fetch_assoc($result);
	while ($row = $result-> fetch_assoc() )
		{
$sname = $row['name'];
$semail = $row['email'];
$sub = "Odyssey Application Pass";
$msg ="Dear $sname,
 JCE welcomes you to ODYSSEY21 
 \n We Thank you for showing your intrest and applying for the event  
 \n We kindly request you to bring your college ID during the event 
 \n Make yor cash payment at the account department showing this Email and Your valid ID and collect your passes before the event starts.
 \n Thanks and Regards.
 \n --------------Event id =  $seid
 \n --------------Student USN = $sid
 \n --------------Student Name = $sname.";
	}

/**
 * This example shows settings to use when sending via Google's Gmail servers.
 * The IMAP section shows how to save this message to the 'Sent Mail' folder using IMAP commands.
 */

//SMTP needs accurate times, and the PHP time zone MUST be set
//This should be done in your php.ini, but this is how to do it if you don't have access to that
date_default_timezone_set('Etc/UTC');

require 'PHPMailer/PHPMailerAutoload.php';

//Create a new PHPMailer instance
$mail = new PHPMailer;

//Tell PHPMailer to use SMTP
// $mail->isSMTP();

//Enable SMTP debugging
// 0 = off (for production use)
// 1 = client messages
// 2 = client and server messages
$mail->SMTPDebug = 0;

//Ask for HTML-friendly debug output
$mail->Debugoutput = 'html';

//Set the hostname of the mail server
$mail->Host = 'smtp.gmail.com';
// use
// $mail->Host = gethostbyname('smtp.gmail.com');
// if your network does not support SMTP over IPv6

//Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
$mail->Port = 587;

//Set the encryption system to use - ssl (deprecated) or tls
$mail->SMTPSecure = 'tls';

//Whether to use SMTP authentication
$mail->SMTPAuth = true;

//Username to use for SMTP authentication - use full email address for gmail
$mail->Username = "codeblind143@gmail.com";

//Password to use for SMTP authentication
$mail->Password = "codeblind";

//Set who the message is to be sent from
$mail->setFrom('codeblind143@gmail.com', 'JCE ODYSSEY');

//Set an alternative reply-to address
$mail->addReplyTo('codeblind143@gmail.com', "Codeblind");

//Set who the message is to be sent to
$mail->addAddress($semail, $sub);

//Set the subject line
$mail->Subject = $sub;

//Read an HTML message body from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body
//$mail->msgHTML(file_get_contents('contents.html'), dirname(__FILE__));
$mail->msgHTML('<!DOCTYPE html <html><body>'.$msg.'</body></html>');

//Replace the plain text body with one created manually
$mail->AltBody = $sub;

//Attach an image file
//$mail->addAttachment('images/phpmailer_mini.png');

//send the message, check for errors
if (!$mail->send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
} else {
	echo"The Pass for the event has been mailed to your Email ID";
    
    //Section 2: IMAP
    //Uncomment these to save your message in the 'Sent Mail' folder.
    #if (save_mail($mail)) {
    #    echo "Message saved!";
    #}
}

//Section 2: IMAP
//IMAP commands requires the PHP IMAP Extension, found at: https://php.net/manual/en/imap.setup.php
//Function to call which uses the PHP imap_*() functions to save messages: https://php.net/manual/en/book.imap.php
//You can use imap_getmailboxes($imapStream, '/imap/ssl') to get a list of available folders or labels, this can
//be useful if you are trying to get this working on a non-Gmail IMAP server.
function save_mail($mail) {
    //You can change 'Sent Mail' to any other folder or tag
    $path = "{imap.gmail.com:993/imap/ssl}[Gmail]/Sent Mail";

    //Tell your server to open an IMAP connection using the same username and password as you used for SMTP
    $imapStream = imap_open($path, $mail->Username, $mail->Password);

    $result = imap_append($imapStream, $path, $mail->getSentMIMEMessage());
    imap_close($imapStream);

    return $result;
}	
		} else{
			echo "Could not apply";
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
