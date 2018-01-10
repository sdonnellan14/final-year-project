<?php

//Login Serv File made with the assistance of http://www.softaox.info/how-to-create-a-simple-login-form-in-php-mysqli-tutorial/
//Session variables created with the assistance of:
// - https://stackoverflow.com/questions/22486793/warning-mysqli-fetch-array-expects-parameter-1-to-be-mysqli-result-boolean-g
// - https://stackoverflow.com/questions/9023470/using-a-session-variable-in-a-sql-where-statement
// - https://stackoverflow.com/questions/10097887/using-sessions-session-variables-in-a-php-login-script
// - https://www.w3schools.com/php/php_sessions.asp

session_start();

$error=''; //Variable to Store error message;
if(isset($_POST['submit'])){
 if(empty($_POST['DisposalEmail']) || empty($_POST['DisposalPassword'])){
 $error = "Username or Password is Invalid";
 }
 else
 {
 //Define $user and $pass
 $_SESSION["martEmail"] = $_POST['DisposalEmail'];
 $user=$_POST['DisposalEmail'];
 $pass=$_POST['DisposalPassword'];
 //Establishing Connection with server by passing server_name, user_id and pass as a parameter
 $conn = mysqli_connect("127.0.0.1","sdonnellan","","AGRI1",3306);
 //sql query to fetch information of registered user and finds user match.
 $query = mysqli_query($conn, "SELECT * FROM DISPOSAL WHERE DisposalPassword='$pass' AND DisposalEmail='$user'");
 
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