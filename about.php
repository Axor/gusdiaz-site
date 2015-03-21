<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8" />
    <title>About</title>
    <link rel="icon" type="image/png" href="favicon.png">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700|Roboto+Slab:400,700' rel='stylesheet' type='text/css'>
    <link type="text/css" rel="stylesheet" href="font-awesome-4.3.0/css/font-awesome.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/main.css">

  </head>

  <body>
    <!-- Nav-bar -->
    <?php
      define('THIS_PAGE', 'About');
      include('nav-bar.php');
    ?>

    <div class="header">
      <div class="container">
        <h1>About Gustavo</h1>
      </div>
    </div>

    <div class="container">
      <div class="about-content">
        <img class="about-image" src="images/gus.jpeg" alt="Gustavo's image">
        <h2>Hi! I'm Gustavo Díaz, and I'm a Developer.</h2>
        <p class="lead">A 4 years of experience Application Web Developer and a Constant Learner. </p>
        <p class="about-text">Currently I'm working on providing code solutions and database maintenance on IBM. I have worked as Consultant for SAP and recently I have been focusing in personal projects for web-based mobile apps. I always maintain the professionalism, responsibility, and honesty in every project and objective.</p></p>
      </div>
    </div>
    
    <div class="main-content">
        <div class="container">
          <div class="row">
            <div class="col-md-6">
              <h2>My Skills</h2>
              <p>I am a developer focused in Web Technologies. Most of my vocational education is aimed to developing web-based solutions.</p>
              <p>During college, I specialized in two software branches:</p>
              <ul class="list-unstyled">
                <li class="lead"><i class="fa fa-database"></i>   Web DataBases</li>
                <li class="lead"><i class="fa fa-file-code-o"></i>    Application Developing</li>
              </ul>
              <p>Feel free to check my resume and if you need to contact me, go <a href="contact.html">here.</a></p>
              <p>
                <!-- <a href="#"> -->
                  <button type="button" class="btn btn-primary btn-lg btn-block disabled">Download CV</button>
                <!-- </a> -->
              </p>
            </div>
            <div class="col-md-6">
              <h2>Programming Languages</h2>
              <p>
                <span class="label label-info">HTML</span>
                <span class="label label-warning">CSS</span>
                <div class="progress">
                  <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%">
                    90%
                  </div>
                </div>
              </p>
              <p>
                <span class="label label-info">JavaScript</span>
                <div class="progress">
                  <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100" style="width: 65%">
                    65%
                  </div>
                </div>
              </p>
              <p>
                <span class="label label-default">PHP</span>
                <div class="progress">
                  <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%">
                    75%
                  </div>
                </div>
              </p>
              <p>
                <span class="label label-info">MySQL</span>
                <div class="progress">
                  <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                    80%
                  </div>
                </div>
              </p>
            </div>
          </div>
        </div>
    </div>

    <div class="learn-more">
      <div class="container">

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