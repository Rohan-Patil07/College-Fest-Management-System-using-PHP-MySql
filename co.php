<?php
// Start the session
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login V1</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<!-- <link rel="icon" type="image/png" href="images/icons/favicon.ico"/> -->
	<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>

<?php
error_reporting(E_ALL & ~ E_NOTICE);
session_start();
 $pagetitle="LogIn Page";
?>

<?php
       if ($_POST['submit']){
        $username=($_POST['username']);
        $password=($_POST['password']);
		echo "$username";
		echo "$password";
		$conn = mysqli_connect("localhost","Rohan","codeblind","fest");
		if ($conn-> connect_error)
			{
				die("connection failed:".$conn-> connect_error);
			}

        $sql="SELECT cname,cid,pass FROM coordinator WHERE cid='$username' AND pass='$password'";
        $query=mysqli_query($conn, $sql);
        if($query){
			
          $row= mysqli_fetch_row($query);
          $userId= $row[0];
          $dbusername=$row[1];
          $dbpassword=$row[2];
        echo "-------------yooooo";
		}
		else{
			echo "no record";
		}
		
		   
		if($username== $dbusername && $password== $dbpassword){
echo"session";         
		 $_SESSION['coid']=$username;
		  $_SESSION['coname']= $userId;
		  
		  echo "session added index.html calling";
          header('location:/fest/home/co/cohome.html');
		}else{
            echo "<span style='color:red;'>User name or password is incorrect!</span>";
          }    
} 
?>	


	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="images/img-01.png" alt="IMG">
				</div>

				<form class="login100-form validate-form" name= "form" action="co.php", method="post">
					<span class="login100-form-title">
						Student Sign In
					</span>

				
					
					<div class="wrap-input100 validate-input" data-validate = "Unique is required">
						<input class="input100" type="text" name="username" placeholder="Username">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>
					
					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100" type="password" name="password" placeholder="Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
					
					<div class="container-login100-form-btn">
						<button type="submit"  name="submit" value="login" class="login100-form-btn" >
						SUBMIT
						</button>
					</div>
					 </form>
		
					

				
				</form>
			</div>
		</div>
	</div>
	
	

	
<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>