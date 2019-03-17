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
              <span>Proactive Innovator</span>
              <span>Hackathon Lover</span>
              <span>Front-End Development Engineer</span>
            </div>
          </h2>
        </div>
      </div>
    </section>

    <div class="section-title" style="margin-top: 40px;">
        <h1>My Timeline</h1>
    </div>
    <section id="timeline">
      <article>
        <div class="time">
          <span class="date">
            <span class="day">06<sup>th</sup></span>
            <span class="month">Aug</span>
            <span class="year">1989</span>
          </span>
          <h2>Born in Tianjin</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean quis rutrum nunc, eget dictum massa. Nam faucibus felis nec augue adipiscing, eget commodo libero mattis.</p>
        </div>
      </article>
      <article>
        <div class="time">
          <span class="date">
            <span class="day">11<sup>th</sup></span>
            <span class="month">Sep</span>
            <span class="year">2013</span>
          </span>
          <h2>Enrolled in University of Washington</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean quis rutrum nunc, eget dictum massa. Nam faucibus felis nec augue adipiscing, eget commodo libero mattis.</p>
        </div>
      </article>
      <article>
        <div class="time">
          <span class="date">
            <span class="day">08<sup>th</sup></span>
            <span class="month">Oct</span>
            <span class="year">2015</span>
          </span>
          <h2>Get an Epiphany</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean quis rutrum nunc, eget dictum massa. Nam faucibus felis nec augue adipiscing, eget commodo libero mattis.</p>
        </div>
      </article>
      <article>
        <div class="time">
          <span class="date">
            <span class="day">28<sup>th</sup></span>
            <span class="month">Aug</span>
            <span class="year">2016</span>
          </span>
          <h2>Enter UofMichigan to Learn Programming</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean quis rutrum nunc, eget dictum massa. Nam faucibus felis nec augue adipiscing, eget commodo libero mattis.</p>
        </div>
      </article>
      <article>
        <div class="time">
          <span class="date">
            <span class="day">28<sup>th</sup></span>
            <span class="month">Jun</span>
            <span class="year">2018</span>
          </span>
          <h2>Started Working as a DEVELOPER</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean quis rutrum nunc, eget dictum massa. Nam faucibus felis nec augue adipiscing, eget commodo libero mattis.</p>
        </div>
      </article>
    </section>

    <section id="gallery">
    <div class="container">
        <div class="section-title">
            <h1>Media Gallery</span></h1>
        </div>
        
        <div id="filter-btn" class="button-group">
            <ul>
                <!--Buttons for the image filter-->
                <!--data-filter="What ever you want your image to be filter by"-->
                <li><button class="button is-checked" data-filter="*">All</button></li>               
                <li><button class="button" data-filter=".design">Graphic Design</button></li>
                <li><button class="button" data-filter=".photography">Photography</button></li>
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

            <div class="img-container design" data-category="design">
                <a class="example-image-link" href="pics/design/Infographic.jpg" data-lightbox="example-set" data-title="Coffee Infographic"><img class="example-set" src="pics/design/Infographic.jpg" alt="Coffee Infographic">
                <div class="img-overlay popup-gallery" href="pics/design/Infographic.jpg">
                    <div class="img-overlay-text">
                        <p>Graphic Design</p>
                        <h3>Coffee Infographic</h3>
                    </div>
                </div></a>
            </div>
            
            <div class="img-container design" data-category="design">
                <a class="example-image-link" href="pics/design/fourSeason.png" data-lightbox="example-set" data-title="Four Season Webpage"><img class="example-set" src="pics/design/fourSeason.png" alt="Four Season Webpage">
                <div class="img-overlay popup-gallery" href="pics/design/fourSeason.png">
                    <div class="img-overlay-text">
                        <p>Graphic Design</p>
                        <h3>Four Season Webpage</h3>
                    </div>
                </div></a>
            </div>
            
            <div class="img-container design" data-category="design">
                <a class="example-image-link" href="pics/design/grape.jpg" data-lightbox="example-set" data-title="Fruit Poster"><img class="example-set" src="pics/design/grape.jpg" alt="Fruit Poster">
                <div class="img-overlay popup-gallery" href="pics/design/grape.jpg">
                    <div class="img-overlay-text">
                        <p>Graphic Design</p>
                        <h3>Fruit Poster</h3>
                    </div>
                </div></a>
            </div>

            <div class="img-container design" data-category="design">
                <a class="example-image-link" href="pics/design/Advice Digital Sign.jpg" data-lightbox="example-set" data-title="Advice Digital Sign"><img class="example-set" src="pics/design/Advice Digital Sign.jpg" alt="Advice Digital Sign">
                <div class="img-overlay popup-gallery" href="pics/design/Advice Digital Sign.jpg">
                    <div class="img-overlay-text">
                        <p>Graphic Design</p>
                        <h3>Advice Digital Sign</h3>
                    </div>
                </div></a>
            </div>
            
            <div class="img-container design" data-category="design">
                <a class="example-image-link" href="pics/design/hometown.jpg" data-lightbox="example-set" data-title="Introduction to My Hometown"><img class="example-set" src="pics/design/hometown.jpg" alt="Introduction to My Hometown">
                <div class="img-overlay popup-gallery" href="pics/design/hometown.jpg">
                    <div class="img-overlay-text">
                        <p>Graphic Design</p>
                        <h3>Introduction to My Hometown</h3>
                    </div>
                </div></a>
            </div>

            <div class="img-container design" data-category="design">
                <a class="example-image-link" href="pics/design/logoDesign.jpg" data-lightbox="example-set" data-title="Ulead Network Logo Design"><img class="example-set" src="pics/design/logoDesign.jpg" alt="Ulead Network Logo Design">
                <div class="img-overlay popup-gallery" href="pics/design/logoDesign.jpg">
                    <div class="img-overlay-text">
                        <p>Graphic Design</p>
                        <h3>Logo Design</h3>
                    </div>
                </div></a>
            </div>

            <div class="img-container design" data-category="design">
                <a class="example-image-link" href="pics/design/html.jpg" data-lightbox="example-set" data-title="Invitation of Renaissance Fair"><img class="example-set" src="pics/design/html.jpg" alt="Invitation of Renaissance Fair">
                <div class="img-overlay popup-gallery" href="pics/design/html.jpg">
                    <div class="img-overlay-text">
                        <p>Graphic Design</p>
                        <h3>Invitation of Renaissance Fair</h3>
                    </div>
                </div></a>
            </div>

            <div class="img-container design" data-category="design">
                <a class="example-image-link" href="pics/design/alphabeticalPoster.jpg" data-lightbox="example-set" data-title="Greek Methodology Alphabetical Poster"><img class="example-set" src="pics/design/alphabeticalPoster.jpg" alt="Greek Methodology Alphabetical Poster">
                <div class="img-overlay popup-gallery" href="pics/design/alphabeticalPoster.jpg">
                    <div class="img-overlay-text">
                        <p>Graphic Design</p>
                        <h3>Greek Methodology Alphabetical Poster</h3>
                    </div>
                </div></a>
            </div>
            
            <div class="img-container photography" data-category="photography">
                <a class="example-image-link" href="pics/photography/ChangJiang.JPG" data-lightbox="example-set" data-title="Changjiang River, Chongqing Province"><img class="example-set" src="pics/photography/ChangJiang.JPG" alt="Changjiang River, Chongqing Province">
                <div class="img-overlay popup-gallery" href="pics/photography/ChangJiang.JPG">
                    <div class="img-overlay-text">
                        <p>Photography</p>
                        <h3>Changjiang River, Chongqing Province</h3>
                    </div>
                </div></a>
            </div> 

            <div class="img-container photography" data-category="photography">
                <a class="example-image-link" href="pics/photography/CaribbeanSea.JPG" data-lightbox="example-set" data-title="Caribbean Sea, Cancun"><img class="example-set" src="pics/photography/CaribbeanSea.JPG" alt="Caribbean Sea, Cancun">
                <div class="img-overlay popup-gallery" href="pics/photography/CaribbeanSea.JPG">
                    <div class="img-overlay-text">
                        <p>Photography</p>
                        <h3>Caribbean Sea, Cancun</h3>
                    </div>
                </div></a>
            </div> 

            <div class="img-container photography" data-category="photography">
                <a class="example-image-link" href="pics/photography/LakeoftheClouds.jpg" data-lightbox="example-set" data-title="Lake of the Clouds, Michigan"><img class="example-set" src="pics/photography/LakeoftheClouds.jpg" alt="Lake of the Clouds, Michigan">
                <div class="img-overlay popup-gallery" href="pics/photography/LakeoftheClouds.jpg">
                    <div class="img-overlay-text">
                        <p>Photography</p>
                        <h3>Lake of the Clouds, Michigan</h3>
                    </div>
                </div></a>
            </div>

            <div class="img-container photography" data-category="photography">
                <a class="example-image-link" href="pics/photography/SantaMonica.JPG" data-lightbox="example-set" data-title="Santa Monica Beach, Los Angeles"><img class="example-set" src="pics/photography/SantaMonica.JPG" alt="Santa Monica Beach, Los Angeles">
                <div class="img-overlay popup-gallery" href="pics/photography/SantaMonica.JPG">
                    <div class="img-overlay-text">
                        <p>Photography</p>
                        <h3>Santa Monica Beach, Los Angeles</h3>
                    </div>
                </div></a>
            </div>

            <div class="img-container photography" data-category="photography">
                <a class="example-image-link" href="pics/photography/Chicagonight.jpg" data-lightbox="example-set" data-title="Willis Tower, Chicago"><img class="example-set" src="pics/photography/Chicagonight.jpg" alt="Willis Tower, Chicago">
                <div class="img-overlay popup-gallery" href="pics/photography/Chicagonight.jpg">
                    <div class="img-overlay-text">
                        <p>Photography</p>
                        <h3>Willis Tower, Chicago</h3>
                    </div>
                </div></a>
            </div>

            <div class="img-container photography" data-category="photography">
                <a class="example-image-link" href="pics/photography/Wuhouci.jpg" data-lightbox="example-set" data-title="Wuhou Memorial Temple, Sichuan Province"><img class="example-set" src="pics/photography/Wuhouci.jpg" alt="Wuhou Memorial Temple, Sichuan Province">
                <div class="img-overlay popup-gallery" href="pics/photography/Wuhouci.jpg">
                    <div class="img-overlay-text">
                        <p>Photography</p>
                        <h3>Wuhou Memorial Temple, Sichuan Province</h3>
                    </div>
                </div></a>
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