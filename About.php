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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/lightboxcss/lightbox.min.css">
    <link href="css/stylesheet.css" rel="stylesheet">
    <link href="css/about.css" rel="stylesheet">
    <link rel = "shortcut icon" href = "pics/logo.png">
    <title>Nan's Portfolio</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.min.js"></script>
  </head>
  <body>
    <?php include "header.php"; ?>
    <section id="subpage-title">
      <div class="subpage-inner">
        <div class="subpage-copy">
          <h2 class="rw-sentence">
            <span>I am a</span>
            <div class="rw-words rw-words-1">
              <span>Web Developer</span>
              <span>Programmer</span>
              <span>Self Learner</span>
              <span>Student</span>
              <span>Hackathon Lover</span>
              <span>Front End Developer</span>
            </div>
          </h2>
        </div>
      </div>
    </section>
    <section id="portfolio">
    <div class="container">
        <div class="section-title">
            <h1>My <span class="accent-text">Media Gallery</span></h1>
        </div>
        
        <div id="filter-btn" class="button-group">
            <ul>
                <!--Buttons for the image filter-->
                <!--data-filter="What ever you want your image to be filter by"-->
                <li><button class="button is-checked" data-filter="*">All</button></li>
                <li><button class="button" data-filter=".photography">Photography</button></li>
                <li><button class="button" data-filter=".design">Design</button></li>
                <li><button class="button" data-filter=".brand">Brand</button></li>
                <!--End of image filter buttonimg/ports-->
            </ul>
        </div>
        
        <div class="img-grid">
            <div class="img-container photography" data-category="photography">
                <a class="example-image-link" href="pics/photography/aquarium.jpg" data-lightbox="example-set" data-title="Shedd Aquarium, Chicago"><img class="example-set" src="pics/photography/aquarium.jpg" alt="Shedd Aquarium, Chicago">
                <div class="img-overlay popup-gallery" href="pics/photography/aquarium.jpg">
                    <div class="img-overlay-text">
                        <p>Photography</p>
                        <h3>Shedd Aquarium, Chicago</h3>
                    </div>
                </div></a>
            </div>
            
            <div class="img-container brand" data-category="brand">
                <a class="example-image-link" href="http://www.bricho.com/demo/brian/with-particles/img/portfolio-img.jpeg" data-lightbox="example-set" data-title="The Jiu Zhai Valley in Sichuan Province"><img class="example-set" src="http://www.bricho.com/demo/brian/with-particles/img/portfolio-img.jpeg" alt="Jiu Zhai Valley">
                <div class="img-overlay popup-gallery" href="http://www.bricho.com/demo/brian/with-particles/img/portfolio-img.jpeg">
                    <div class="img-overlay-text">
                        <p>Category</p>
                        <h3>Project Title</h3>
                    </div>
                </div></a>
            </div>
            
            <div class="img-container design" data-category="design">
                <img src="http://www.bricho.com/demo/brian/with-particles/img/portfolio-img.jpeg">
                <div class="img-overlay popup-gallery" href="http://www.bricho.com/demo/brian/with-particles/img/portfolio-img.jpeg">
                    <div class="img-overlay-text">
                        <p>Category</p>
                        <h3>Project Title</h3>
                    </div>
                </div>
            </div>
            
            <div class="img-container design" data-category="design">
                <img src="http://www.bricho.com/demo/brian/with-particles/img/portfolio-img.jpeg">
                <div class="img-overlay popup-gallery" href="http://www.bricho.com/demo/brian/with-particles/img/portfolio-img.jpeg">
                    <div class="img-overlay-text">
                        <p>Category</p>
                        <h3>Project Title</h3>
                    </div>
                </div>
            </div>
            
            <div class="img-container design" data-category="design">
                <img src="http://www.bricho.com/demo/brian/with-particles/img/portfolio-img.jpeg">
                <div class="img-overlay popup-gallery" href="http://www.bricho.com/demo/brian/with-particles/img/portfolio-img.jpeg">
                    <div class="img-overlay-text">
                        <p>Category</p>
                        <h3>Project Title</h3>
                    </div>
                </div>
            </div>
            
            <div class="img-container graph" data-category="graph">
                <img src="http://www.bricho.com/demo/brian/with-particles/img/portfolio-img.jpeg">
                <div class="img-overlay popup-gallery" href="http://www.bricho.com/demo/brian/with-particles/img/portfolio-img.jpeg">
                    <div class="img-overlay-text">
                        <p>Category</p>
                        <h3>Project Title</h3>
                    </div>
                </div>
            </div>            
        </div>  
    </div>
    </section>
    
    <script type="text/javascript" src="js/general.js"></script>
    <script src="js/lightboxjs/lightbox-plus-jquery.min.js"></script>
    <script src="https://cdn.rawgit.com/sirxemic/jquery.ripples/master/dist/jquery.ripples-min.js"></script>
  </body>
  <?php include "footer.php"; ?>
</html>