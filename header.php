<?php
echo "
	<header>
  		<nav>
          <div class=\"menu-icon\">
            <i class=\" fa fa-bars fa-2x\"></i>
          </div>
          
          <a href=\"index.php\" id=\"logo\">
          	<img class=\"logo-pic\" src=\"pics/logo.png\" alt=\"Name Icon\" style=\"width:55px;height:55px;border:0;\"/>
          </a>
          <div class=\"menu\">
            <ul>";
          $actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
//          echo "<script> console.log($actual_link);</script>";
          if ($actual_link == "http://candicedeng.com/"){
          echo "
            <li class=\"active\"><a href=\"index.php\">Home</a></li>";
          }else{
            echo"
            <li><a href=\"index.php\">Home</a></li>";
          }
          echo"
              <li><a href=\"About.php\">About</a></li>
              <li><a href=\"Projects.php\">Projects</a></li>
              <li><a href=\"Resume.php\">Resume</a></li>
              <li class=\"last-nav-item\"><a href=\"Contact.php\">Contact</a></li>
            </ul>
          </div>
      	</nav>
	</header>
";
?>

