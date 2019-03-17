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
		<link href="css/stylesheet.css" rel="stylesheet">
		<link rel = "shortcut icon" href = "pics/logo.png">
		<title>Nan's Portfolio</title>
		<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
		<script src="https://cdn.rawgit.com/sirxemic/jquery.ripples/master/dist/jquery.ripples-min.js"></script>
	</head>
	<body>
		<?php include "header.php"; ?>
		<section id="subpage-title">
		  <div class="subpage-inner">
		    <div class="subpage-copy">
		    <i class="fa fa-quote-left fa-3x quote left-quote"></i> 
				<h1 class="quote lead">Perfection [in design] is achieved, not when there is nothing more to add, but when there is nothing left to take away.</h1>
				<br/><h1 style="text-align: right; font-size: 2em">--Antoine de Saint-Exupéry</h1>
			<i class="fa fa-quote-right fa-3x quote right-quote"></i>
		    </div>
		  </div>
		</section>
		<div class="cover-letter">
			<embed src="files/Resume_NanDeng.pdf" style="width:100%;height:90%;” scale="tofit"/>
			<button class="btn outline aqua"><a href="files/Resume_NanD.pdf" download>Download CoverLetter</a></button>
		</div>
		<div class="plain-resume">
			<embed src="files/Resume_NanDeng.pdf" style="width:100%;height:90%;” scale="tofit"/>
			<button class="btn outline aqua"><a href="files/Resume_NanD.pdf" download>Download Resume</a></button>
		</div>
	  	<div class="detailed-resume">
		  	<embed src="files/DetailedResume_NanD.pdf" style="width:100%;height:90%;” scale="tofit"/>
		  	<button class="btn outline aqua"><a href="files/DetailedResume_NanD.pdf" download>Download Detailed Resume</a></button>
	  	</div>
		
		<script type="text/javascript" src="js/general.js"></script>
	</body>
	<?php include "footer.php"; ?>
</html>
