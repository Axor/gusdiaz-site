<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8" />
    <title>Gustavo Díaz</title>
    <link rel="icon" type="image/png" href="favicon.png">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700|Roboto+Slab:400,700' rel='stylesheet' type='text/css'>
    <link type="text/css" rel="stylesheet" href="font-awesome-4.3.0/css/font-awesome.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/main.css">

  </head>

  <body>
    <!-- Nav-bar -->
    <?php
      define('THIS_PAGE', 'Home');
      include('nav-bar.php');
    ?>

    <div class="jumbotron">
      <div class="container">
        <h1>Gustavo Díaz</h1>
        <p>Web Application Developer</p>
        <p><a class="btn btn-primary btn-lg" href="about.php" role="button">Learn More</a></p>
      </div>
    </div>
    
    <div class="main-content">
        <div class="container">
            <h2>This is what I do...</h2>
            <p>I love the internet, I think the internet is the best tool ever made. So I dedicate almost all my time to understand and learn the tools inside the web.</p>
            <div class="row">
                <div class="col-md-4">
                    <div class="thumbnail">
                      <img alt="JavaScript" src="images/js-128.png"/>
                    </div>
                    <div class="thumbnail">
                      <img alt="Device Access" src="images/php-128.png"/>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="thumbnail">
                      <img alt="HTML5 Semantics" src="images/HTML5_Semantics_128.png"/>
                    </div>
                    <div class="thumbnail">
                      <img alt="CSS" src="images/HTML5_Styling_128.png"/>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="thumbnail">
                      <img id="img-cent" alt="HTML5" src="images/HTML5_Logo_256.png"/>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="learn-more">
      <div class="container">
      </div>
    </div>

    <!-- likes-content -->
    <div class="likes-content">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <span class="fa-stack fa-lg">
              <i class="fa fa-circle fa-stack-2x"></i>
              <i style="color:rgb(51, 122, 183)" class="fa fa-book fa-stack-1x"></i>
            </span>
            <h3>
              I Blog
            </h3>
            <p>I have a personal blog, I post things like lifehacker tips, code, opinions and experiences. </p>
          </div>
          <div class="col-md-4">
            <span class="fa-stack fa-lg">
                <i class="fa fa-circle fa-stack-2x"></i>
                <i style="color:rgb(51, 122, 183)" class="fa fa-code fa-stack-1x"></i>
            </span>
            <h3>
              I Code
            </h3>
            <p>I am developer, learning things everyday. I work mostly times on Web Projects.</p>
          </div>
          <div class="col-md-4">
            <span class="fa-stack fa-lg">
                <i class="fa fa-circle fa-stack-2x"></i>
                <i style="color:rgb(51, 122, 183)" class="fa fa-gamepad fa-stack-1x"></i>
            </span>
            <h3>
              I Play
            </h3>
            <p>One of my greatest passions are videogames. I am a great fan of FPS and Strategy genres. </p>
          </div>
        </div>
      </div>
    </div>
    <!-- Footer -->
    <?php
      include 'footer.php';
    ?>
  </body>

  <!-- Google Analitycs -->
  <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-60683136-1', 'auto');
    ga('send', 'pageview');
  </script>
  <!-- jQuery library from Google APIS -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <!-- My Bootstrap JS -->
  <script src="js/bootstrap.js"></script>
  <script>
    $('.dropdown-toggle').dropdown();
  </script>
</html>