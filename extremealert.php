
<?php

if(isset($_POST['submit'])){

$name=$_POST['name'];
$type=$_POST['type'];
$mssg=$_POST['mssg'];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "portal";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO alert (name, type, mssg)
VALUES ('$name', '$type', '$mssg')";

if ($conn->query($sql) == TRUE) {
    
    ?>
<script>alert("Alert Posted successfully");</script>
<META HTTP-EQUIV="Refresh" CONTENT="0; URL=http://localhost/capstone/extremealert.php">

<?php

} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

}

?>

<!doctype html>
<html lang="en">
  <head>

    <title>Farmer's Portal</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <link rel="stylesheet" href="css/styles.css">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap" rel="stylesheet">
    
    <style>

      *{
      margin: 0;
      padding: 0;
      font-family: 'Josefin Sans', sans-serif;
    }
  
      .table-sortable tbody tr {
    cursor: move;
    }

    form{
        margin: 20px 0;
    }
    form input, button{
        padding: 5px;
    }
    table{
        width: 100%;
        margin-bottom: 20px;
        border-collapse: collapse;
    }
    table, th, td{
        border: 1px solid #cdcdcd;
    }
    table th, table td{
        padding: 10px;
        text-align: left;
    }

    form_main {
    width: 100%;
}
.form_main h4 {
    font-family: roboto;
    font-size: 20px;
    font-weight: 300;
    margin-bottom: 15px;
    margin-top: 20px;
    text-transform: uppercase;
}
.heading {
    border-bottom: 1px solid #fcab0e;
    padding-bottom: 9px;
    position: relative;
}
.heading span {
    background: #9e6600 none repeat scroll 0 0;
    bottom: -2px;
    height: 3px;
    left: 0;
    position: absolute;
    width: 75px;
}   
.form {
    border-radius: 7px;
    padding: 6px;
}
.txt[type="text"] {
    border: 1px solid #ccc;
    margin: 10px 0;
    padding: 10px 0 10px 5px;
    width: 100%;
}
.txt_3[type="text"] {
    margin: 10px 0 0;
    padding: 10px 0 10px 5px;
    width: 100%;
}
.txt2[type="submit"] {
    background: #242424 none repeat scroll 0 0;
    border: 1px solid #4f5c04;
    border-radius: 25px;
    color: #fff;
    font-size: 16px;
    font-style: normal;
    line-height: 35px;
    margin: 10px 0;
    padding: 0;
    text-transform: uppercase;
    width: 30%;
}
.txt2:hover {
    background: rgba(0, 0, 0, 0) none repeat scroll 0 0;
    color: #5793ef;
    transition: all 0.5s ease 0s;
}


    </style>

    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
   
    
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
 <div class="col-lg-auto" align="center"><a class="navbar-brand" href="home.html">Home</a></div>
  <div class="col-lg-auto" align="center"><a class="navbar-brand" href="admincheckcropdealer.html">View Crop Dealer</a></div>
  <div class="col-lg-auto" align="center"> <a class="navbar-brand" href="admincheckseeddealer.html">View Seed Dealer</a></div>
  <div class="col-lg-auto" align="center"><a class="navbar-brand" href="admincheckfertilizerdealer.html">View Fertilizer Dealer</a></div>
  <div class="col-lg-auto" align="center"><a class="navbar-brand" href="adminviewcomplain.html">View Complaints</a></div>
  <div class="col-lg-auto" align="center"><a class="navbar-brand" href="admintofarmer.html">View Tips</a></div>
</nav>

        </div>
     </div>


<div class="container">
    <div class="row justify-content-center">
    <div class="col-md-4">
        <div class="form_main">
                <h4 class="heading"><strong><center>Provide Extreme Weather Alert Message</center></strong></h4>
                <div class="form">
                <form action="" method="post" id="contactFrm" name="contactFrm">
                    <input type="text" required="" placeholder="Enter Station Name" name="name" class="txt" required>
                    <input type="text" required="" placeholder="Warning Type ( e.g : Thunderstorm ) " name="type" class="txt" required>
                     <textarea placeholder="Provide your message" name="mssg" type="text" class="txt_3" required></textarea>
                     <center><input type="submit" value="submit" name="submit" class="txt2"></center>
                </form>
            </div>
            </div>
            </div
    </div>
</div>
</div>

<br>
<hr>
<br>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>