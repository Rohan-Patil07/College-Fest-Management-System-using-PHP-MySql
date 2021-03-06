<?php
// Start the session
session_start();
$name = $_SESSION["studname"];
?>


<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>ODYSSEY21</title>
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">

    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link href="css/custom.css" rel="stylesheet">


    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

</head>

<body>

    <!-- Navigation -->
    <nav id="siteNav" class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Logo and responsive toggle -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">
                    <span class="glyphicon glyphicon-fire"></span>
                    ODYSSEY 2k-21
                </a>
            </div>
            <!-- Navbar links -->
            <div class="collapse navbar-collapse" id="navbar">
                <ul class="nav navbar-nav navbar-right">
                    <h3 style="color:#76ef00;">
                        <li> <?php
                                echo "Welcome ";
                                echo "$name";
                                ?>
                        </li>
                    </h3>


                </ul>

            </div><!-- /.navbar-collapse -->
        </div><!-- /.container -->
    </nav>

    <!-- Header -->
    <header>
        <div class="header-content">
            <div class="header-content-inner">
                <h1>JCE ODYSSEY 2021 </h1>
                <h2>A JOURNEY TOWARDS EXCELLANCE..</h2>
                <br>

                <a href="viewevent.php" class="btn btn-primary btn-lg">Events</a>

            </div>
        </div>
    </header>

    <!-- Intro Section -->
    <section class="intro">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <span class="glyphicon glyphicon-apple" style="font-size: 40px"></span>
                    <h1>
                        A great deal of opportunity to portray your talents and discover something new.<br> So hurry up and be the part of this great event.</h1>
                    <h2 class="section-heading">&nbsp;</h2>
                    <!-- <p class="text-light">90's Feelings</p> -->
                </div>
            </div>
        </div>
    </section>

    <!-- Content 1 -->
    <section class="content">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <img class="img-responsive img-circle center-block" src="images/microphone.jpg" alt="">
                </div>
                <div class="col-sm-6">
                    <h2 class="section-header"></h2>
                    <h2>Explore the best fest Ever at Belgaum</h2>
                    <p class="lead text-muted"><br>DJ Night<br>Concert<br>Food fest</p>
                    <a href="#" class="btn btn-primary btn-lg">on 6th and 7th April<</a>
                </div>

            </div>
        </div>
    </section>



    <!-- Footer -->
    <footer class="page-footer">

        <!-- Contact Us -->
        <div class="contact">
            <div class="container">
                <h2 class="section-heading">Contact Us</h2>
                <p><span class="glyphicon glyphicon-earphone"></span><br> +91 831 2411192</p>
                <p><span class="glyphicon glyphicon-envelope"></span><br> info@jainbgm.in</p>
            </div>
        </div>

        <!-- Copyright etc -->
        <div class="small-print">
            <div class="container">
            <h2> <a href="https://www.jce.ac.in/">jce.ac.in</a> </h2>
            </div>
        </div>

    </footer>

    <!-- jQuery -->
    <script src="js/jquery-1.11.3.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="js/jquery.easing.min.js"></script>

    <!-- Custom Javascript -->
    <script src="js/custom.js"></script>

</body>

</html>