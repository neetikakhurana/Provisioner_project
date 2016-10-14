<?php
$connection = mysqli_connect('localhost', 'root', '', 'kaushik_test_db1');

     session_start();
	 
 
if($_SERVER["REQUEST_METHOD"] == "POST")
 {
// username and password received from loginform 
$username=mysqli_real_escape_string($connection,$_POST['name']);
$password=mysqli_real_escape_string($connection,$_POST['passwo']);

$sql_query="SELECT id FROM phplogin WHERE username='$username' and password='$password'";
$result=mysqli_query($connection,$sql_query);
$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
$count=mysqli_num_rows($result);
 
 
// If result matched $username and $password, table row must be 1 row
if($count==1)
{
$_SESSION['login_user']=$username;

header("location: welcome-home.php");
}
else
{
$error="Username or Password is invalid";
}
}
?>
 
 