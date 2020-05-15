<?php

$conn = new mysqli("localhost","root","","portal");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$query= "SELECT * FROM alert";
$data = mysqli_query($conn,$query);
$total=mysqli_num_rows($data);
  
//fetch table as arrays

if($total!=0)
{

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
    
    <title>Farmer's Portal</title>
  </head>
<style type="text/css">

table, th, td {
  border: 1px solid black;
}
</style>

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
        	<div class="dropdown">
  <a class<div id="google_translate_element"></div>
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
  <div class="col-lg-2" align="center"><a class="navbar-brand" href="#">About Us</a></div>
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



<div class="container">
        <div class="col-sm" align="center" style="outline: 1px solid black ;height: auto;">
          <br>
		<h3>EXTREME WEATHER ALERTS</h3>
		<p style="font-size:15px;color:red;">Registered Farmers will receive SMSs only in case of SEVERE THUNDERSTORM, THUNDERSTORM WITH SQUALL AND THUNDERSTORM WITH HAIL </p>
		<center>
    <div class="row col-md-9 col-md-offset-2 custyle">
    <table class="table table-striped custab">
    <thead>
        <tr>
            <th>Name</th>
            <th>Phone</th>
            <th>Description</th>
        </tr>
    </thead>
    <?php

    while($result=mysqli_fetch_assoc($data))
    {
            echo "
            <tr>
                <td>".$result['name']."</td>
                <td>".$result['type']."</td>
                <td>".$result['mssg']."</td>
            </tr>";
    }
}
?>
</table>
</div>
</center>
</div>
</div>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>