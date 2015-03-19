<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8" />
    <title>Contact</title>
    <link rel="icon" type="image/png" href="favicon.png">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700|Roboto+Slab:400,700' rel='stylesheet' type='text/css'>
    <link type="text/css" rel="stylesheet" href="font-awesome-4.3.0/css/font-awesome.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/main.css">

  </head>

  <body>
    <?php
      include 'nav-bar.php';
    ?>

    <div class="header">
      <div class="container">
        <h1>Contact</h1>
      </div>
    </div>

    <div class="container">
      <div class="contact-content">
        <p class="lead" style="text-align:center; color: #5a5a5a"><strong>If you have any inquiry, please send me a message and I will contact you as soon as I can.</strong></p>
        <form role="form" name="contact-form" action="php/send-mail.php" method="post" >
          <div class="well well-sm">
            <strong><i class="fa fa-check"></i> Required Field</strong>
          </div>
          <div class="form-group">
            <div class="input-group">
              <input type="text" class="form-control" name="firstName" placeholder="Name" required>
              <span class="input-group-addon"><i class="fa fa-check"></i></span>
            </div>
          </div>
          <div class="form-group">
            <div class="input-group">
              <input type="text" class="form-control" name="lastName" placeholder="Last Name" required>
              <span class="input-group-addon"><i class="fa fa-check"></i></span>
            </div>
          </div>
          <div class="form-group">
            <div class="input-group">
              <input type="email" class="form-control" name="emailAddress" placeholder="E-Mail" required>
              <span class="input-group-addon"><i class="fa fa-check"></i></span>
            </div>
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Message:</label>
            <div class="input-group">
              <textarea class="form-control" rows="5" name="messageContent" style="resize:none" required></textarea>
              <span class="input-group-addon"><i class="fa fa-check"></i></span>
            </div>
          </div>
          <div class="form-group">
            <button type="submit" class="btn btn-info btn-lg">Submit</button>
          </div>
        </form>
      </div>
    </div>
    
    <div class="social-footer">
      <div class="container">
        <div class="social-btns">
          <ul>
            <li><a href="http://twitter.com/gus_diaz" class="fa fa-3x fa-inverse fa-twitter"></a></li>
            <li><a href="https://github.com/Axor" class="fa fa-3x fa-inverse fa-github"></a></li>
            <li><a href="http://mx.linkedin.com/in/gus24" class="fa fa-3x fa-inverse fa-linkedin"></a></li>
            <li><a href="https://instagram.com/gus_diaz" class="fa fa-3x fa-inverse fa-instagram"></a></li>
            <li><a href="https://www.youtube.com/channel/UCOUTJ-0493KN-xGZ6dg2kKw" class="fa fa-3x fa-inverse fa-youtube"></a></li>
          </ul>
        </div>
      </div>
    </div>

    <?php
      include 'footer.php';
    ?>
  </body>
  <!-- Improve -->
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
  <!-- Improve -->
</html> 