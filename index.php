<!DOCTYPE html>
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
			  <li><a href="#">Sports</a></li>
			  <li><a href="#">Teams</a></li>
			  <li><a href="#">Sports</a></li>
			</ul>
			</div>

			<div class="span5">
				<form class="form-inline" action="login.php">
					<input type="text" class="input-small" placeholder="Email">
					<input type="password" class="input-small" placeholder="Password">
					<label class="checkbox">
						<input type="checkbox"> Remember me
					</label>
					<button type="submit" class="btn">Sign in</button>
				</form>
			</div>
		</div>

  		<!-- Main information: Query outputs and whatnot -->
  		<div class="row">
		<div class="hero-unit">
		  <h1>Welcome to Our Project</h1>
		  <p>Welcome to our Database Concepts Final Project, a program for querying data of your favorite sports team! Whether it's watching the Irish kick some ass or watching your favorite NFL team, we got it here! Hopefully you are ready for this, because it's jsut going to get better!</p>
		  <p>
		    <a class="btn btn-primary btn-large">
		      Get Started Here!
		    </a>
		  </p>
		</div>
		</div>

		<div class="row">


		</div>

  	</div>
    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>