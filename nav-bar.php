<?php
    define('THIS_PAGE', 'pagename');
     
    switch (THIS_PAGE) {
     
    case 'Home':
      echo ('
        <div class="nav">
        <div class="container">
        <ul class="nav nav-pills">
        <li role="presentation" class="active"><a href="#">home</a></li>
        <li role="presentation"><a href="about.php">about</a></li>   
        <li role="presentation"><a href="http://twitter.com/gus_diaz">twitter</a></li>
        <li role="presentation"><a href="contact.php">contact</a></li>
        <li role="presentation" class="dropdown">
        <a class="dropdown-toggle pull-right" data-toggle="dropdown" href="#" role="button" aria-expanded="true">EN<span class="caret"></span></a>
        <ul class="dropdown-menu" role="menu">
        <li><a href="#">ES</a></li>
        </ul>
        </li>
        </ul>
        </div>
        </div>
          ');
    break;
     
    case 'About':
      echo ('
        <div class="nav">
        <div class="container">
        <ul class="nav nav-pills">
        <li role="presentation"><a href="index.php">home</a></li>
        <li role="presentation" class="active"><a href="#">about</a></li>   
        <li role="presentation"><a href="http://twitter.com/gus_diaz">twitter</a></li>
        <li role="presentation"><a href="contact.php">contact</a></li>
        <li role="presentation" class="dropdown">
        <a class="dropdown-toggle pull-right" data-toggle="dropdown" href="#" role="button" aria-expanded="true">EN<span class="caret"></span></a>
        <ul class="dropdown-menu" role="menu">
        <li><a href="#">ES</a></li>
        </ul>
        </li>
        </ul>
        </div>
        </div>
          ');
    break;
     
    case 'Contact':
      echo ('
        <div class="nav">
        <div class="container">
        <ul class="nav nav-pills">
        <li role="presentation"><a href="index.php">home</a></li>
        <li role="presentation"><a href="about.php">about</a></li>   
        <li role="presentation"><a href="http://twitter.com/gus_diaz">twitter</a></li>
        <li role="presentation" class="active"><a href="#">contact</a></li>
        <li role="presentation" class="dropdown">
        <a class="dropdown-toggle pull-right" data-toggle="dropdown" href="#" role="button" aria-expanded="true">EN<span class="caret"></span></a>
        <ul class="dropdown-menu" role="menu">
        <li><a href="#">ES</a></li>
        </ul>
        </li>
        </ul>
        </div>
        </div>
          ');
    break;
     
  }

?>