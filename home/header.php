<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link href=css/main.css rel="stylesheet" type="text/css">
<link href=css/home.css rel="stylesheet" type="text/css">
<link href=css/all.min.css rel="stylesheet" type="text/css">
<title>Attendance Mangement</title>
</head>

<body>

<div class="topnav" id="myTopnav">
  <a href="home.php" class="active"> <i class="fa fa-home"></i> Home</a> 
  <div class="dropdown">
    <button class="dropbtn">Student 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="Student_edit.php">Edit</a>
      <a href="Student_insert.php">Insert</a>
	  <a href="Student_view.php">View</a>
	        </div>
  </div> 
   <div class="dropdown">
    <button class="dropbtn">Teacher 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="Teachers_edit.php">Edit</a>
      <a href="Teacher_insert.php">Insert</a>
	  <a href="Teacher_view.php">View</a>
	        </div>
  </div>
   <div class="dropdown">
    <button class="dropbtn">Subject 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="Subject_edit.php">Edit</a>
      <a href="Subject_insert.php">Insert</a>
	  <a href="Subject_view.php">View</a>
	        </div>
			<label style=" color:#FFFBF0; padding-left:500px"><i class=" fa fa-user"></i> 
			<?php
			error_reporting(0); 
			session_start();
			echo "Hi,".$_SESSION['username']; 
			?> 
			</label>  
  </div>
 <div class="topnav-right">
  <a href="#contact">Do attendance <i class="fa fa-check"></i> </a>
  <div class="dropdown">
    <button class="dropbtn">Reports 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="#">Monthly Report</a>
      <a href="#">Overall Report</a>      </div>
  </div> 
  <a href="logout.php">Logout <i class="fa fa-unlock"></i></a>
  <a href="#about">About <i class="fa fa-info"></i> </a>
   </div> 
<!--  <a href="javascript:void(0);" style="font-size:15px;" class="icon" onClick="myFunction()">&#9776;</a>-->
</div>


<!--<script>
function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}-->
</script>
</body>
</html>
