<?php

session_start();
$uname=$_POST['uname'];
$psw=$_POST['psw'];
$psw_hash=md5($psw);
//echo $uname;
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'portal');
$q="select * from seeddealer where email_id='$uname' && password='$psw_hash'";
$result=mysqli_query($con,$q);
$num=mysqli_num_rows($result);
if($num==1){
  $_SESSION['u_name']=$uname;
  header('location:http://localhost/capstone/admin_action_page.html');   //Login successfull
}
else{
  header('location:http://localhost/capstone/seedlogin.html');   //Login failed
}

?>
