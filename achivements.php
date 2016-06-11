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
	Include('header.htm')
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
					
					<a class="navbar-brand visible-xs" href="gallery.php">Select From Menu</a>
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
					      </li>
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
        $('ul.nav > li:nth-child(6)').addClass('active')    </script>
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
<div class="container shadow-container">
	<div class="table-responsive">
			<h1 class="lead">Result(2015)</h1>
			
					<table class="table table-condensed">
						<tr class="info">
							<td>#</td>
							<td>Name</td>
							<td>Father's Name</td>
							<td>Class</td>
							<td>Address</td>
							<td>Position</td>
							<td>Percentage</td>
						</tr>
						<tr class="warning">
							<td>1</td>
							<td>Memoona Masood</td>
							<td>Masood Ahmad Khan</td>
							<td>9th</td>
							<td>Narota Mandhole</td>
							<td>1st</td>
							<td>90%</td>
						</tr>
						<tr class="active">
							<td>2</td>
							<td>Memoona Masood</td>
							<td>Masood Ahmad Khan</td>
							<td>9th</td>
							<td>Narota Mandhole</td>
							<td>2nd</td>
							<td>89%</td>
						</tr>
						<tr class="danger">
							<td>3</td>
							<td>Memoona Masood</td>
							<td>Masood Ahmad Khan</td>
							<td>9th</td>
							<td>Narota Mandhole</td>
							<td>3rd</td>
							<td>87%</td>
						</tr>
						<tr class="success">
							<td>4</td>
							<td>Memoona Masood</td>
							<td>Masood Ahmad Khan</td>
							<td>9th</td>
							<td>Narota Mandhole</td>
							<td>4th</td>
							<td>85%</td>
						</tr>
					</table>
					
	</div>
</div>
</section>
<?php

           Include('footer.htm');
	?>	
</body>
</html>