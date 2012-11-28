<!DOCTYPE html>
<?php
session_start();
ERROR_REPORTING(E_ALL);
?>


<html>
  <head>
    <title>Sports Database Center</title>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
  </head>
  <body>

  	<div class = "container">
  		<!-- Navigation Bar: Possibly moving to an include -->
  		<div class="row">
	  		<div class="span7">
	  		<ul class="nav nav-pills">
			  <li class="active">
			    <a href="#">Home</a>
			  </li>

			  <li class="dropdown">
			   <a class="dropdown-toggle" data-toggle="dropdown" href="#">
				Divisions 
			  <b class="caret"></b>
			</a>
			  <ul class="dropdown-menu">
			    	<li><a href="#">Atlantic Coast</a></li>
				<li><a href="#">Big 12</a></li>
				<li><a href="#">Big East</a></li>
				<li><a href="#">Big Ten</a></li>
				<li><a href="#">Conference USA</a></li>
				<li><a href="#">Independents (FBS)</a></li>
				<li><a href="#">Mid-American</a></li>
				<li><a href="#">Mountain West</a></li>
				<li><a href="#">Pacific-12</a></li>
				<li><a href="#">Southeastern</a></li>
				<li><a href="#">Sun Belt</a></li>
				<li><a href="#">Western Athletic</a></li>
			  </ul>

			  </li>
			  <li><a href="#teams">Teams</a></li>
			  <li><a href="#">Administrator</a></li>
			</ul>
			</div>

			<div class="span5">
				<?php

				if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == false) {
				echo '
				<form class="form-inline" action="userconnect.php" method="post">
					<input type="text" class="input-small" placeholder="Username" name="user">
					<input type="password" class="input-small" placeholder="Password" name="pwd">
					<label class="checkbox">
						<input type="checkbox" name="cookie"> Remember me
					</label>
					<button type="submit" class="btn">Sign in</button>
				</form>';
				}

				else {
				
				echo "<p class = 'clearfix small' align='right'> Welcome, " .  $_SESSION['user'] . "</p>";

				}
				?>
			</div>
		</div>

  		<!-- Main information: Query outputs and whatnot -->
  		<div class="row">
		<div class="hero-unit">
		  <h1>Welcome to Our Project</h1>
		  <p>Welcome to our Databases Final Project, which consists of Iheanyi Ekechukwu, Alvin Hu, Taylor Seale, and 				Ryan Shea. Our database consists of college football teams and their results from this previous season, 			which will future allow you to compare them to one another.</p>
		  <p>

			<?php
			if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == false) {
				echo '  <a class="btn btn-primary btn-large" href="login.php">
		      			Login here!
		    		</a>';
			}

			else {
			echo '      <div class="btn-group">
					<a class="btn btn-primary btn-large dropdown-toggle" data-toggle="dropdown" href="#">
					    What next?
					    <span class="caret"></span>
					</a>

					<ul class="dropdown-menu">
						<li><a href="#">Manual Query</a></li>
						<li><a href="#">Query By Division</a></li>
						<li><a href="#">Query By Conference</a></li>
						<li><a href="#">Compare Two Teams</a></li>
						<li class="divider"></li>
						<li class="dropdown-submenu">
						<a tabindex="-1" href="#">Admin Options</a>
						<ul class="dropdown-menu">

						</ul>
						</li>
				   	</div>';
								}
			?>
		 
		  </p>
		</div>
		</div>

		<div class="row" id="teams">
			<div class>

			</div>


		</div>

  	</div>
    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
