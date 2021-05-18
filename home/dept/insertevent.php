<?php
session_start();
?>
<?php

$eid = $_POST["eid"];
$ename = $_POST["ename"];
$desc = $_POST["desc"];
$did = $_SESSION["deptid"];
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
    echo "Co=ordinator Records inserted successfully.";
	
	
	
	
	
	
$onn = mysqli_connect("localhost","Rohan","codeblind","fest");
	if ($onn-> connect_error)
	{
	die("connection failed:".$onn-> connect_error);
	}

$sname = $cname;
$semail = $email;
$sub = "Appointed as Event Coordinator";
$msg ="Dear $sname,
 JCE welcomes you to ODYSSEY21
 Your Department ( $did ) has appointed you as the Coordinator for the event $ename, 
 You can login to fest.pagekite.me/fest as cordinator to manage the ecent
 -------------------LOGIN ID = $cid
-------------------PASSWORD = co123"; 

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
$mail->isSMTP();

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
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

 $sql = "INSERT INTO eventt (name,	eid	,descp	,cid	,did	,loc	,stime	,etime,	fee	) VALUES (('$ename'), ('$eid'),('$desc'),('$cid'),('$did'), ('$loc'),('$stime'),('$etime'),('$fee') )";
 
if(mysqli_query($link, $sql)){
    echo "Event Records inserted successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
 
  $sql = "INSERT INTO win (eid,	usn,	place,	price) VALUES (('$eid'), ('$u') , ('$f') ,('$first'))";
 if(mysqli_query($link, $sql)){
    echo "Records inserted successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
 
 
  $sql = "INSERT INTO win (eid,	usn,	place,	price) VALUES (('$eid'), ('$u') , ('$s') ,('$second'))";
 if(mysqli_query($link, $sql)){
    echo "Records inserted successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}


  $sql = "INSERT INTO win (eid,	usn,	place,	price) VALUES (('$eid'), ('$u') , ('$t') ,('$third'))";
 if(mysqli_query($link, $sql)){
    echo "Records inserted successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
 
// Close connection
mysqli_close($link);



?>
