<?php

session_start();

$error=''; //Variable to Store error message;
if(isset($_POST['submit'])){
 if(empty($_POST['MartEmail']) || empty($_POST['MartPassword'])){
 $error = "Username or Password is Invalid";
 }
 else
 {
 //Define $user and $pass
 $_SESSION["martEmail"] = $_POST['MartEmail'];
 $user=$_POST['MartEmail'];
 $pass=$_POST['MartPassword'];
 //Establishing Connection with server by passing server_name, user_id and pass as a parameter
 $conn = mysqli_connect("127.0.0.1","sdonnellan","","AGRI1",3306);
 //sql query to fetch information of registered user and finds user match.
 $query = mysqli_query($conn, "SELECT * FROM MART WHERE MartPassword='$pass' AND MartEmail='$user'");
 
 $rows = mysqli_num_rows($query);
 if($rows == 1){
 header("Location: martpage.php"); // Redirecting to other page
 }
 else
 {
 $error = "Username or Password is Invalid";
 }
 mysqli_close($conn); // Closing connection
 }
}
 
?>