<?php

session_start();
$uname=$_POST['uname'];
$psw=$_POST['psw'];
$psw_hash=md5($psw);
//echo $uname;
$_SESSION['uname']=$uname;
$_SESSION['psw']=$psw;
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'portal');
$q="select * from farmer where email_id='$uname' && password='$psw_hash'";
$result=mysqli_query($con,$q);
$num=mysqli_num_rows($result);
$results=mysqli_fetch_assoc($result);
if($num==1){
  $_SESSION['u_name']=$uname;
  $_SESSION['pass']=$psw_hash;
  //header('location:http://localhost/capstone/fertdealerverify.php');   //Login successfull
}
else{
  header('location:http://localhost/capstone/farmerlogin.html');   //Login failed
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Farmer Portal </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<style>
 h1{
   font-weight:900;
 }
 h2
 {
   
   font-weight: 800;
   
 }
        
  ul {
                  list-style-type: none;
                  margin: 0;
                  padding: 0;
                  overflow: hidden;
                  background-color:black;
                  opacity: 0.9;
                }
                
                li {
                  float: left;
                }
                
                li a {
                  display: block;
                  color:white;
                  text-align: center;
                  padding: 14px 16px;
                  text-decoration: none;
                  font-weight: 900;
                }
                
                li a:hover {
                  background-color:white;
                  
                }    
                #container{
                  float: right;
                }

               
            
  
</style>


<body>
   
        <div class="col-sm"><center><h2>Welcome <?php echo $results['u_name']; ?> </h2></center></div>
        <ul>
           <li><a class="active" href="home.html">Home</a></li>
           <li><a class="active" href="complain.php">Complain</a></li>
           <li><a class="active" href="complainstatus.php">View Complain Status</a></li>
          <li><a class="active" href="FARMINGTIPS.php">Farming Tips</a></li>
          <li><a href="cropbuy.php">Crop Advertisement Details</a></li>
          <li><a href="php/logout.php">Logout</a></li>
       </ul>
       <br>

  <div class="container">
  
     <div id="myCarousel" class="carousel slide" data-ride="carousel">
     <!-- Indicators -->
     <ol class="carousel-indicators">
       <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
       <li data-target="#myCarousel" data-slide-to="1"></li>
       <li data-target="#myCarousel" data-slide-to="2"></li>
     </ol>

    <!-- Wrapper for slides -->
    

  
     <div class="carousel-inner">
      <div class="item active">
        <img src="a2.jpg" alt="Los Angeles" style="width:100%;">
      </div>

      <div class="item">
        <img src="a9.jpg" alt="Chicago" style="width:100%;">
      </div>
    
      <div class="item">
        <img src="a4.jpg" alt="New york" style="width:100%;">
      </div>
      <div class="item">
          <img src="a6.jpg" alt="New york" style="width:100%;">
        </div>
       <div class="item">
            <img src="a8.jpg" alt="New york" style="width:100%;">
        </div>
          
        
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

<hr>

<div>
    

  
    <hr>
  
    
  <div class="row">
    <ul>
      <div class="col-lg-6">
            <li>
              <a href="seedbuy.php">Buy Seeds Here</a>
            </li>
          </div>
          <div class="col-lg-6">
            <li>
              <a href="fertbuy.php">Buy Fertilizers Here</a>
            </li>
          </div>
            
          </ul>
  </div>
        </div>
      
  
      <hr>
  
      
      <div>
  
     
  
        
      
    
  
    <hr>
  
    
  
    
  
    
    <div>© 2018 Copyright:
      <a href="https://mdbootstrap.com/education/bootstrap/" target="_blank"> MDBootstrap.com</a>
    </div>
    
  
  
    

</div>

</body>

</html>
