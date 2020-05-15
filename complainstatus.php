<?php

session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>COMPLAIN STATUS VIEW </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="navbar.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<style>
    h1{
        font-family: 'Times New Roman', Times, serif;
    }  
    #customers {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color:green;
  color: white;
}
body{
   background-image: url(statuspic.jpg);
   background-repeat:no-repeat;
   background-position: 990px 135px;
  
   margin-right: 200px;
   background-size: right;
   background-attachment: fixed;
}

</style>
<body>
                                         <h1><center>FARMER'S PORTALS</center></h1>
        <ul>
           <li><a class="active" href="home.html">Home</a></li>
           <li><a class="active" href="complain.php">Complain</a></li>
           <li><a class="active" href="complainstatus.php">View Complain Status</a></li>
          <li><a class="active" href="FARMINGTIPS.php">Farming Tips</a></li>
          <li><a href="cropbuy.php">Crop Advertisement Details</a></li>
          <li><a href="php/logout.php">Logout</a></li>
       </ul>
<hr>
        <table id="customers">
                <tr>
                  <th>Farmer ID</th>
                  <th>Complain ID </th>
                  <th>Complain</th>
                  <th>Status</th>
                </tr>
                <tr>
                  <td>156</td>
                  <td>13</td>
                  <td>ajka akja kqja</td>
                  <td>Solved</td>
                </tr>
                <tr>
                  <td>165</td>
                  <td>485</td>
                  <td>xa jwd qjjq</td>
                  <td>Unsolved </td>
                </tr>
                <tr>
                  <td>231</td>
                  <td>163</td>
                  <td>usjnw kmak </td>
                  <td>Solved</td>
                </tr>
                <tr>
                  <td>145</td>
                  <td>234</td>
                  <td>ha iskms jqna</td>
                  <td> Solved</td> 
                </tr>
              </table>
    
              <td onclick="myFunction()">  </td>
              <p id="demo"></p>

              <script>
              function myFunction() {
              document.getElementById("demo").innerHTML = "full description how problem is solved";
              }
          
              
              </script>

</body>