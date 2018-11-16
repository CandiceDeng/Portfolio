<!DOCTYPE html>
<html>
	<head>
	  	<meta http-equiv="X-UA-Compatible" content="IE=9; IE=8; IE=7; IE=EDGE"/>
  		<meta charset="UTF-8">
  		<link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,700' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Noto+Sans' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Bad+Script' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Lobster"/>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="css/bootstrap-3.3.0/dist/css/bootstrap.min.css">
		<link href="css/stylesheet.css" rel="stylesheet">
		<link href="css/contact.css" rel="stylesheet">
		<link rel = "shortcut icon" href = "pics/logo.png">
		<title>Nan's Portfolio</title>
		<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
		<script src="https://cdn.rawgit.com/sirxemic/jquery.ripples/master/dist/jquery.ripples-min.js"></script>
		<script src="https://code.angularjs.org/1.3.0-rc.1/angular.min.js"></script>
	</head>
	<body>
		<?php include "header.php"; ?>
		<section id="subpage-title">
		  <div class="subpage-inner">
		    <div class="subpage-copy">
		    <h1>Dem some big ass caves</h1>
		    <p>You could probably fit in there ;)</p>
		    </div>
		  </div>
		</section>
		<section class="contact-form">
			<div class="col-lg-12 col-md-12" ng-app="contact-form" ng-controller="Ctrl">
			    <div class="col-lg-6 col-md-6 col-sm-6 topgap">

			    <center style="font-family: 'Lobster', cursive;">
			        <h1>Contact Me</h1>
			    </center>

			    <table width="100%">
			      <tr>
			        <td>
			            <label for="firstName">First Name:</label>
			            <input type="text" class="form-control col-lg-3 col-md-3 col-sm-3 col-xs-3" placeholder="Please Enter your First Name" ng-model="firstName" required/>
			        </td>
			        <td>
			            <label for="lastName">Last Name:</label>
			            <input type="text" class="form-control col-lg-3 col-md-3 col-sm-3 col-xs-3" placeholder="Please Enter your Last Name" ng-model="lastName" required/>
			        </td>
			      </tr>
			      
			      <tr>
			        <td>
			            <label for="email">Email ID:</label>
			            <input type="email" class="form-control col-lg-3 col-md-3 col-sm-3 col-xs-3" placeholder="Please enter your Email ID" ng-model="email" required/>
			        </td>
			        <td>
			            <label for="place">Country:</label>
			            <input type="text" class="form-control col-lg-3 col-md-3 col-sm-3 col-xs-3" placeholder="Please enter your Country" ng-model="place" required/>
			        </td>
			      </tr>
			      <tr>
			        <td>
			            <label for="company">Company:</label>
			            <input type="text" class="form-control col-lg-3 col-md-3 col-sm-3 col-xs-3" placeholder="Please enter your Comapany Name" ng-model="company" required/>
			        </td>
			        <td>
			            <label for="profession">Profession:</label>
			            <input type="text" class="form-control col-lg-3 col-md-3 col-sm-3 col-xs-3" placeholder="Please enter your Profession" ng-model="profession" required/>
			        </td>
			      </tr>

			      <tr>
			        <td colspan="2">
			            <label for="message">Message:</label>
			            <textarea class="form-control" rows="5" id="message" ng-model="message"></textarea>
			        </td>
			      </tr>
			    </table>
			    
			    <button type="button" class="btn btn-danger btn-block buttonSubmit">Send Email</button>
			    </div>

			    <div class="col-lg-6 col-md-6 col-sm-6">
			        <div class="paper">
			          <div class="lines">
			            <div class="Lettertext" spellcheck="false">
			              Hello Candice, <br /><br />
			              This is {{ firstName+" "+lastName }}. I am from {{place}}. 
			              <br/><br/>
			              I am a {{profession}}, working in {{company}}.
			              <br/><br/>
			              {{message}}
			              <br/><br />
			              Like your work and give you a heart &#9829;&#9829;&#9829;. Looking forward to hear from you soon.<br />
			              You can reach me back on {{email}}.
			              <br/><br/>
			              Thanks and Regards,<p>{{ firstName+" "+lastName }}
			            </div>
			          </div>
			        </div>
			    </div>
			</div>
		</section>
		<script type="text/javascript" src="js/general.js"></script>
		<script type="text/javascript" src="js/contact.js"></script>
	</body>
	<?php include "footer.php"; ?>
</html>

<?php
	$from_angular = json_decode( file_get_contents('php://input') );
	echo "<script>console.log('connect = ".$from_angular."');</script>";
	$message = $from_angular->message;
	echo "<script>console.log('message = ".$message."');</script>";
?>

