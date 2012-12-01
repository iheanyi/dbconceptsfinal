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
			</div>
		</div>

		<div class="row">
			<div class="span5">
					<p><i>Notre Dame Fighting Irish (12-0)</i></p>
			</div>
			<div class="span2">
			</div>
			<div class="span5">
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
