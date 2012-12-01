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
	<div class="container"> 
		<div class="row">  
		  	<div class="navbar navbar-fixed-top">  
			  <div class="navbar-inner">  
			    <div class="container">  
					<ul class="nav">  
					  <li><a class="brand" href="#">iNCAA</a></li>  
					  <li class="active"><a href="#">Head to Head</a></li>  
					  <li><a href="#">Conference Statistics</a></li>  
					  <li><a href="#">Team Statistics</a></li>  
					  <li><a href="#">Player Statistics</a></li>  
					</ul> 
			    </div>  
			  </div>  
			</div>
		</div>

<<<<<<< HEAD
		<div class="row">  
		  	<div class="hero-unit">
		  		<h1>Head to Head</h1>
		  		<p>Compare Conferences and Teams. Determine who's best</p>
			</div>
		</div>

		<div class="row">
			<div class="span5">
				<div class="span2">
					<a class="btn btn-primary btn-large dropdown-toggle" data-toggle="dropdown" href="#">
						    Conference
						    <span class="caret"></span>
						</a>
				</div>
				<div class="span1">
					<a class="btn btn-primary btn-large dropdown-toggle" data-toggle="dropdown" href="#">
						    Team
						    <span class="caret"></span>
						</a>
				</div>
			</div>
			<div class="span2">
			</div>
			<div class="span5">
				<div class="span2">
					<a class="btn btn-primary btn-large dropdown-toggle" data-toggle="dropdown" href="#">
						    Conference
						    <span class="caret"></span>
						</a>

				</div>
				<div class="span1">
					<a class="btn btn-primary btn-large dropdown-toggle" data-toggle="dropdown" href="#">
						    Team
						    <span class="caret"></span>
						</a>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="span5">
					<img src="img/conferences/d6fy9mv96hoexe7bvdueo3miv.gif"/>
					<img src="img/teamHelmets/71.gif"/>
			</div>
			<div class="span2">
				<h1>VS.</h1>
			</div>
			<div class="span5">
					<img src="img/conferences/ggexhsn10xe29nhn6rlz4bmfg.gif"/>
					<img src="img/teamHelmets/3.gif"/>
=======
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
>>>>>>> 3b8413e0ff36e3b82a030567c4ef3795b0a38882
			</div>
		</div>

		<div class="row">
			<div class="span5">
					<p><i>Notre Dame Fighting Irish (12-0)</i></p>
			</div>
			<div class="span2">
			</div>
			<div class="span5">
<<<<<<< HEAD
				<p><i>Alabama Crimson Tide (11-1)</i></p>
			</div>
		</div>


		<div class="row">
			<div class="span5">
			</div>
			<div class="span2">
				<button type="submit" class="btn">Compare</button>
				<p><br></p>
			</div>
			<div class="span5">
			</div>
=======
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
>>>>>>> 3b8413e0ff36e3b82a030567c4ef3795b0a38882
		</div>

		<div class="row">
			<div class="span6">
				<span style="text-align:center">
				<p><img src="img/teamsLittle/notred_50.png"/><t><b>Offense</b><t><img src="img/teamsLittle/alabam_50.png"/></p>
				</span>
			</div>
			<div class="span2"></div>
			<div class="span6">
				<span style="text-align:center">
				<p><img src="img/teamsLittle/notred_50.png"/><t><b>Defense</b><t><img src="img/teamsLittle/alabam_50.png"/></p>
				</span>
			</div>
		</div>

<<<<<<< HEAD
		<span style="text-align:center">
		<div class="row">
			<div class="span6">
				<div class="span1"> 
					<table class="table table-striped">   
					        <tbody>  
					          <tr>  
					            <td>001</td>    
					          </tr>  
					          <tr>  
					            <td>002</td>    
					          </tr>  
					          <tr>  
					            <td>003</td>   
					          </tr>  
					        </tbody>
					</table>  
			    </div>
			    <div class="span3">
					<table class="table table">  
					        <tbody>  
					          <tr>  
					            <td><b>Passing Yards For</b></td>   
					          </tr>  
					          <tr>  
					            <td><b>Rushing Yards For</b></td>   
					          </tr>  
					          <tr>  
					            <td><b>Total Yards For</b></td>    
					          </tr>  
					        </tbody>  
					</table> 
			    </div> 
			    <div class="span1">  
					<table class="table table-striped">   
					        <tbody>  
					          <tr>  
					            <td>001</td>   
					          </tr>  
					          <tr>  
					            <td>002</td>   
					          </tr>  
					          <tr>  
					            <td>003</td>   
					          </tr>  
					        </tbody>  
					</table> 
			    </div> 
=======
		<div class="row" id="teams">
			<div class>

>>>>>>> 3b8413e0ff36e3b82a030567c4ef3795b0a38882
			</div>

			<div class="span2"></div>

			<div class="span6">
				<div class="span1"> 
					<table class="table table-striped">   
					        <tbody>  
					          <tr>  
					            <td>001</td>    
					          </tr>  
					          <tr>  
					            <td>002</td>    
					          </tr>  
					          <tr>  
					            <td>003</td>   
					          </tr>  
					        </tbody>
					</table>  
			    </div>
			    <div class="span3">
					<table class="table table">  
					        <tbody>  
					          <tr>  
					            <td><b>Passing Yards Against</b></td>   
					          </tr>  
					          <tr>  
					            <td><b>Rushing Yards Against</b></td>   
					          </tr>  
					          <tr>  
					            <td><b>Total Yards Against</b></td>    
					          </tr>  
					        </tbody>  
					</table> 
			    </div> 
			    <div class="span1">  
					<table class="table table-striped">   
					        <tbody>  
					          <tr>  
					            <td>001</td>   
					          </tr>  
					          <tr>  
					            <td>002</td>   
					          </tr>  
					          <tr>  
					            <td>003</td>   
					          </tr>  
					        </tbody>  
					</table> 
			    </div> 
			</div>
		</div>

		<div class="row">  
		  	<div class="hero-unit">
		  		<h1>Notre Dame Wins!</h1>
		  		<p>Possibly describe why Notre Dame won</p>
			</div>
		</div>
     
	</div> 

    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
