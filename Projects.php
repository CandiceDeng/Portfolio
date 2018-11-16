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
    <link href="css/stylesheet.css" rel="stylesheet">
    <link href="css/projects.css" rel="stylesheet">
    <link rel = "shortcut icon" href = "pics/logo.png">
    <title>Nan's Portfolio</title>
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://tympanus.net/Development/DialogEffects/js/modernizr.custom.js"></script>
    <script src="https://tympanus.net/Development/DialogEffects/js/classie.js"></script>
    <script src="https://cdn.rawgit.com/sirxemic/jquery.ripples/master/dist/jquery.ripples-min.js"></script>
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

    <section id="work">
      <div class="section-title">My Past Work</div>
      <div class="section-content">
        <div class="products-grid">
          <div class="product-item active">
            <div class="product-header"></div>
            <div class="product-main">
              <div class="column">
                <div class="column product-title">Work#1</div><a class="column product-link button-wrap trigger" data-dialog-1="dialog#1">Visit</a>
              </div>
              <div class="product-content">Product Content</div>
            </div>
          </div>
          <div class="product-item">
            <div class="product-header"></div>
            <div class="product-main">
              <div class="column">
                <div class="column product-title">Work#2</div><a class="column product-link button-wrap trigger" data-dialog-2="dialog#2">Visit</a>
              </div>
              <div class="product-content">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur luctus fermentum dolor, ac convallis est varius non...</div> 
            </div>
          </div>
          <div class="product-item">
            <div class="product-header"></div>
            <div class="product-main">
              <div class="column">
                <div class="column product-title">Work#3</div><a class="column product-link button-wrap trigger" data-dialog-3="dialog#3">Visit</a>
              </div>
              <div class="product-content">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur luctus fermentum dolor, ac convallis est varius non...</div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section id="course">
      <div class="section-title">My Past Projects</div>
      <div class="section-content">
        <div class="products-grid">
          <div class="product-item">
            <div class="product-header"></div>
            <div class="product-main">
              <div class="column">
                <div class="column product-title">Project#1</div><a class="column product-link button-wrap trigger" data-dialog-4="dialog#4">Visit</a>
              </div>
              <div class="product-content">Product Content</div>
            </div>
          </div>
          <div class="product-item">
            <div class="product-header"></div>
            <div class="product-main">
              <div class="column">
                <div class="column product-title">Project#2</div><a class="column product-link button-wrap trigger" data-dialog-5="dialog#5">Visit</a>
              </div>
              <div class="product-content">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur luctus fermentum dolor, ac convallis est varius non...Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur luctus fermentum dolor, ac convallis est varius non..Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur luctus fermentum dolor, ac convallis est varius non..Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur luctus fermentum dolor, ac convallis est varius non..Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur luctus fermentum dolor, ac convallis est varius non..Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur luctus fermentum dolor, ac convallis est varius non..Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur luctus fermentum dolor, ac convallis est varius non..</div>
            </div>
          </div>
          <div class="product-item">
            <div class="product-header"></div>
            <div class="product-main">
              <div class="column">
                <div class="column product-title">Project#3</div><a class="column product-link button-wrap trigger" data-dialog-6="dialog#6">Visit</a>
              </div>
              <div class="product-content">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur luctus fermentum dolor, ac convallis est varius non...</div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <?php include "works.php"; ?>
    
    <script type="text/javascript" src="js/general.js"></script>
    <script type="text/javascript" src="js/projects.js"></script>
  </body>
  <?php include "footer.php"; ?>
</html>