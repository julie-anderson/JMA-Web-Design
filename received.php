<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="refresh" content="5;url=https://juliemanderson.com" />
    <title>Julie Anderson | Freelance Web Developer</title>
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    <header>
      <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#collapsemenu">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a href="index.html" class="navbar-brand">
              Julie Anderson Web Developer
            </a>
          </div>
          <div class="collapse navbar-collapse" id="collapsemenu">
            <ul class="nav navbar-nav">
              <li class="active"><a href="index.html">Home</a></li>
              <li><a href="index.html#about">About</a></li>
              <li><a href="index.html#services">Services</a></li>
              <li><a href="index.html#contact">Contact</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
              <li><a href="https://www.facebook.com/juliemandersonwebdesign/"><i class="fa fa-facebook fa-lg"   ></i></a></li>
              <li><a href="https://twitter.com/JMAWebDev"><i class="fa fa-twitter fa-lg"></i></a></li>
              <li><a href="https://www.linkedin.com/in/julie-klotz-anderson-9110a610"><i class="fa fa-linkedin fa-lg"></i></a></li>
            </ul>
          </div>
        </div>
      </nav>
    </header>
    <div class="container" id="php-response">
      <div class="row">
        <div class="col-xs-8 col-xs-offset-2">
          <div class="panel panel-default">
            <div class="panel-heading">
              <h3 class="panel-title">Thank you for your interest!</h3>
            </div>
            <div class="panel-body">
     <?php
      $name = $_POST["name"];
      $email = $_POST["email"];
      $comments = $_POST["comments"];

      
      echo "<p>I try to respond to all inquiries within 24 hours.</p>";
      echo "<p>Your submitted info:</p>";
      echo "<p>Name: " . $name . "</p>";
      echo "<p>Email Address: " . $email . "</p>";
      echo "<p>Comments: " . $comments . "</p>";
    
      $to = "juliemanderson@gmail.com";
      $subject = "Website Form Comment";
      $message = "You have received a new message from the user $name at email address $email.\n".
      "Here is the message:\n $comments\n".
    
      $to = "juliemanderson@gmail.com";
      mail($to,$subject,$message);
     ?>
   </div>
     </div>
  </div>
    </div>

  
</div>

  
  
  <footer>
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-12 text-center">
          <p><a href="mailto:juliemanderson@gmail.com">juliemanderson@gmail.com</a></p>
          <p>Julie M. Anderson Web Design</p>
          <p>&copy; 2016
        </div>
      </div>
    </div>
  </footer>
  
 
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <script src="js/script.js"></script>
  </body>
</html>
