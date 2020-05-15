<?php 
    if(isset($_POST['submit'])) {
      $name=$_POST['name'];
      require 'phpmailer/PHPMailerAutoload.php';
      require 'credential.php';
      $mail = new PHPMailer;
      //$mail->SMTPDebug = 4;                               // Enable verbose debug output
      $mail->isSMTP();                                      // Set mailer to use SMTP
      $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
      $mail->SMTPAuth = true;                               // Enable SMTP authentication
      $mail->Username = EMAIL;                 // SMTP username
      $mail->Password = PASS;                           // SMTP password
      $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
      $mail->Port = 587;                                    // TCP port to connect to
      $mail->setFrom(EMAIL, 'Farmers Portal');
      $mail->addAddress($_POST['email']);     // Add a recipient
      $mail->addReplyTo(EMAIL);
      
      $mail->isHTML(true);                                  // Set email format to HTML
      $mail->Subject = '';
      $mail->Body    = 'Thanks for Contacting us '.$name.'. We will Contact you soon !';
      //$mail->AltBody = $_POST['message'];
      if(!$mail->send()) {
          echo 'Message could not be sent.';
          echo 'Mailer Error: ' . $mail->ErrorInfo;
      } else {
          echo 'Message has been sent';
      }
    }
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/contact.css">

    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap" rel="stylesheet">
    
    <style>

      *{
      margin: 0;
      padding: 0;
      font-family: 'Josefin Sans', sans-serif;
    }
  </style>
    <!-- <script src=js/chat.js></script> -->
    <script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5dacd78378ab74187a5a9aca/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>

    <title>Farmer's Portal</title>
  </head>

  <body background="back.jpg">
    <div class="container">
      <div class="row" style="outline: 1px solid black ;height: 100px;">
        <div class="col-lg-3" align="left">
          <img src="images/Logo.png" height="90px" >
        </div>
        <div class="col-lg-6" align="center">
        	<h3 style="font-family: Jokerman;">Farmer's Portal</h3>
            <p class="lead" style="font-family: Jokerman;">One Stop Shop for Farmers !</p>
        </div>
        <div class="col-lg-3" align="right">
        	<div id="google_translate_element"></div>
  <script type="text/javascript">
    function googleTranslateElementInit(){
      new google.translate.TranslateElement({pageLanguageL: 'en'}, 'google_translate_element');
    }
  </script>
  <script src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

      </div>
    </div>
</div>

<div class="container">
    <div class="row" style="outline: 1px solid black ;height: auto;">
    		<nav class="navbar navbar-dark bg-dark" style="width: 100%">
  <!-- Navbar content -->
  <div class="col-lg-2" align="center"><a class="navbar-brand" href="home.html">Home</a></div>
  <div class="col-lg-2" align="center"><a class="navbar-brand" href="aboutus.html">About Us</a></div>
  <div class="col-lg-2" align="center">
    <div class="dropdown">
    <a class="navbar-brand" href="#">Major Crops</a>
    <div class="dropdown-content">
    <a href="wheat.html">Wheat</a>
    <a href="maize.html">Maize</a>
    <a href="rice.html">Rice</a>
    <a href="pulse.html">Pulse</a>
  </div>
  </div>
</div>
  <div class="col-lg-2" align="center"><a class="navbar-brand" href="training.html">Training</a></div>
  <div class="col-lg-2" align="center"><a class="navbar-brand" href="contactus.php">Contact Us</a></div>
  
</nav>
    	</div>
     </div>

     <div class="container contact">
  <div class="row" style="outline: 1px solid black ;height: auto;">
    <div class="col-md-3">
      <div class="contact-info">
        <img src="https://image.ibb.co/kUASdV/contact-image.png" alt="image"/>
        <h2>Contact Us</h2>
        <h4>We would love to hear from you!</h4>
      </div>
    </div>
    <div class="col-md-9">
    <form action="" method="POST">
      <div class="contact-form">
        <div class="form-group">
          <label class="control-label col-sm-2" for="fname">First Name:</label>
          <div class="col-sm-10">          
          <input type="text" class="form-control" name="name" id="name" placeholder="Enter First Name" required>
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-2" for="lname">Last Name:</label>
          <div class="col-sm-10">          
          <input type="text" class="form-control" id="lname" placeholder="Enter Last Name" name="lname" required>
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-2" for="email">Email:</label>
          <div class="col-sm-10">
          <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" required>
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-2" for="comment">Comment:</label>
          <div class="col-sm-10">
          <textarea class="form-control" rows="5" id="comment" required></textarea>
          </div>
        </div>
        <div class="form-group">        
          <div class="col-sm-offset-2 col-sm-10">
          <button type="submit" name="submit" id="submit" class="btn btn-default">Submit</button>
          </div>
        </div>
      </div>
    </form>
    </div>
  </div>
</div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

  </body>
</html>