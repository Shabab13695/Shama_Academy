<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="icon" href="monogram/shamam.png" />
    <title>Shama Academy</title>
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/common.css" rel="stylesheet">
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.js"></script>
</head>

<body role="document">
<header class="container-fluid">
	<?php
	Include('header.htm');
	
if($_SERVER["REQUEST_METHOD"] == "POST")
{       

      $name=  $_POST['contact-name'];
      $email=$_POST['contact-email'];
      $message=$_POST['contact-message'];

      //echo $name.$email.$message;

                $servername = "localhost";
$username = "root";
$password = "";
$dbname = "shama_academy";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO feed_back(Name, Email, Comment)
VALUES ('$name', '$email', '$message')";
}
?>
<nav class="row">
		<div class="navbar navbar-inverse navbar-static-top" role="navigation">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					
					<a class="navbar-brand visible-xs" href="feedback.php">Select From Menu</a>
				</div>
				<div class="navbar-collapse collapse cl-effect-14">
					<ul class="nav navbar-nav nav-justified">
        				<li><a href="shama_edu_default.php">Home</a></li>
                         <li class="dropdown">
					          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Staff <b class="caret"></b></a>
					          <ul class="dropdown-menu">
					          	<li><a href="staff.php">Shama Staff</a></li>
					            <li><a href="blog.php">Blog</a></li>
					            
					          </ul>
						 <li class="dropdown">
					          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Gallery <b class="caret"></b></a>
					          <ul class="dropdown-menu">
					          	<li><a href="gallery.php">School Gallery</a></li>
					            <li><a href="quran.php">Quran Classes</a></li>
					            <li><a href="shamastaff.php">Staff</a></li>
					            
					          </ul>
					        </li>
						<li><a href="feedback.php">Feedback</a></li>
                        <li><a href="jobs.php">Job Openings</a></li>
                        
        <li class="dropdown">
          <a href="achivements.php" class="dropdown-toggle" data-toggle="dropdown">Achievements <b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a href="achivements.php">Result(2015)</a></li>
            <li><a href="previous.php">Previous</a></li>
            
          </ul>
        </li>
        			<li><a href="jobs.php#contact-us">Contact Us</a></li>
      </ul>
				</div>
			</div>
		</div>
	</nav>
   <script type="text/javascript">
        document.onscroll = function() {
            if( $(window).scrollTop() > $('header.container-fluid > div:first-child').height() ) {
                $('nav > div.navbar').removeClass('navbar-static-top').addClass('navbar-fixed-top');
            }
            else {
                $('nav > div.navbar').removeClass('navbar-fixed-top').addClass('navbar-static-top');
            }
        };
        $('ul.nav > li:nth-child(4)').addClass('active')    </script>
</header>
<section id="content" class="container-fluid">
<div class="row">
	<div id="carousel-home-page" class="carousel slide" data-ride="carousel">
		<ol class="carousel-indicators">
			<li data-target="#carousel-home-page" data-slide-to="0" class="active"></li>
			<li data-target="#carousel-home-page" data-slide-to="1"></li>
			<li data-target="#carousel-home-page" data-slide-to="2"></li>
			<li data-target="#carousel-home-page" data-slide-to="3"></li>
			
			
		</ol>
		<div class="carousel-inner">
			
						
					<div class="item active">
					<img src="images/pics/1.jpg" alt="" />
					
				</div>
				<div class="item ">
					<img src="images/pics/2.jpg" alt="" />
				</div>
				<div class="item">
					<img src="images/pics/3.jpg" alt="" />
					
				</div>
				<div class="item ">
					<img src="images/pics/4.jpg" alt="" />
				</div>
				
		</div>
	</div>
</div>
<div class="container shadow-container staff">	
<div class="page-header" id="section-contact">
				<h2>FeedBack<small>Let's get in touch</small></h2>
			</div>
		
			<div class="row">
				<div class="col-lg-8 col-md-8 col-sm-8 col-xm-8">

				<form action="feedback.php" method="post"  class="form-horizontal" role="form">
					<div class="form-group">
						<label for="contact-name" class="col-lg-6 col-md-6 col-sm-6 col-xm-6 control-label"  >Name:</label>
						<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6  ">
						
							<input type="text"  name="contact-name"  required="" class="form-control" id="name" placeholder="Name" 
							pattern="[a-zA-Z\s]{3,30}">
						</div>
					</div>
					<div class="form-group">
						<label for="contact-email" class="col-lg-6 col-md-6 col-sm-6 col-xm-6  control-label"  >E-mail:</label>
						<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6">
						
							<input type="email"  name="contact-email"  required="" class="form-control" id="e-mail" placeholder="name@domain.com"
							  pattern="^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$">
						</div>
					</div>
				
					<div class="form-group">
						<label for="contact-message" class=" col-lg-6 col-md-6 col-sm-6 col-xm-6 control-label" >Message:</label>
						<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6">
							<textarea name="contact-message" required id="contact-message" class="form-control" rows="8" cols="20" ></textarea>
						</div>
					</div>
					<div class="form-group">
						<div class="col-lg-8 col-lg-offset-6">
							<button type="submit" value="send" class="btn btn-success">Send</button>
						</div>
					</div>
					
				</form>
			</div>


			</div>

			<div><?php
           if($_SERVER["REQUEST_METHOD"] == "POST")
{       
           if ($conn->query($sql) === TRUE) {
    echo "<h3>Thanks for your feedback</h3>";
} else {
    echo "<h3>Sorry their is some problem</h3>";
}
         $conn->close();
        }
		?></div>	
		</div>
		
</section>
<?php

       
           Include('footer.htm');
	?>	

</body>
</html>