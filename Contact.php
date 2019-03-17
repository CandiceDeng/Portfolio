<?php

?>

<!DOCTYPE html>
<html>
	<head>
	  	<meta http-equiv="X-UA-Compatible" content="IE=9; IE=8; IE=7; IE=EDGE"/>
  		<meta charset="UTF-8">
  		<link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,700' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Noto+Sans' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Bad+Script' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Lobster"/>
		<link href='https://fonts.googleapis.com/css?family=Bungee' rel='stylesheet'>
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
		<?php include "header.php";?>
		<section id="subpage-title">
		  <div class="subpage-inner">
		    <div class="subpage-copy">
		    <i class="fa fa-quote-left fa-3x quote left-quote"></i> 
				<h1 class="quote lead">Measuring programming progress by lines of code is like measuring aircraft building progress by weight.</h1>
				<br/><h1 style="text-align: right; font-size: 2em">--Bill Gates</h1>
			<i class="fa fa-quote-right fa-3x quote right-quote"></i> 
		    </div>
		  </div>
		</section>
		<section class="contact-form">
			<div class="col-lg-12 col-md-12" ng-app="" ng-init="
			firstName = 'Human';
    		lastName = 'Resource';
    		place = 'a beautiful city';
    		profession = 'recruiter';
    		company = 'your dream company';
    		message = 'Today I would like to inform you that your work is pretty impressive. Hope we could get contact to each other and furtherly talk about a precious working position in my company. This position is related to Software Development, which is a perfect fit to your professional background.';
    		email = 'recruiter@yourdreamcompany.com'">
			    <div class="col-lg-6 col-md-6 col-sm-6 topgap">

			    <center style="font-family: 'Lobster', cursive; color: #5F4B8B">
			        <h1>Contact Me</h1>
			    </center>
			    <p>This page is designed via AngularJS, which aims at simulating the effect of a letter written on papers. Please send me an any further throughts that you have. Sincerely looking forward to hear from you! &#9924;</p>

			    <form name="contactform" method="post" action="sendEmail.php">
			    <table width="100%">
			      <tr>
			        <td>
			            <label for="firstName">First Name:</label>
			            <input type="text" name="firstName" class="form-control col-lg-3 col-md-3 col-sm-3 col-xs-3" placeholder="Please Enter your First Name" ng-model="firstName" required/>
			        </td>
			        <td>
			            <label for="lastName">Last Name:</label>
			            <input type="text" name="lastName" class="form-control col-lg-3 col-md-3 col-sm-3 col-xs-3" placeholder="Please Enter your Last Name" ng-model="lastName" required/>
			        </td>
			      </tr>
			      
			      <tr>
			        <td>
			            <label for="email">Email:</label>
			            <input type="email" name="email" class="form-control col-lg-3 col-md-3 col-sm-3 col-xs-3" placeholder="Please enter your Email ID" ng-model="email" required/>
			        </td>
			        <td>
			            <label for="place">Country:</label>
			            <input type="text" name="place" class="form-control col-lg-3 col-md-3 col-sm-3 col-xs-3" placeholder="Please enter your Country" ng-model="place" required/>
			        </td>
			      </tr>
			      <tr>
			        <td>
			            <label for="company">Company:</label>
			            <input type="text" name="company" class="form-control col-lg-3 col-md-3 col-sm-3 col-xs-3" placeholder="Please enter your Comapany Name" ng-model="company" required/>
			        </td>
			        <td>
			            <label for="profession">Profession:</label>
			            <input type="text" name="profession" class="form-control col-lg-3 col-md-3 col-sm-3 col-xs-3" placeholder="Please enter your Profession" ng-model="profession" required/>
			        </td>
			      </tr>

			      <tr>
			        <td colspan="2">
			            <label for="message">Message:</label>
			            <textarea name="message" class="form-control" rows="5" id="message" ng-model="message"></textarea>
			        </td>
			      </tr>
			    </table>
			    
			    <input type="submit" value="Send Email" class="btn btn-danger btn-block buttonSubmit" ></input>
			    </form>
			    </div>

			    <div class="col-lg-6 col-md-6 col-sm-6">
			        <div class="paper">
			          <div class="lines">
			            <div class="Lettertext" spellcheck="true" style="overflow-y: scroll;">
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
	</body>
	<?php include "footer.php";?>
</html>

<!-- 	$from_angular = json_decode( file_get_contents('php://input'), true );
	echo "<script>console.log('connect = ".$from_angular."');</script>";
	header('Content-Type: application/json');
	$message = $from_angular->message;
	echo "<script>console.log('message = ".$message."');</script>"; -->


