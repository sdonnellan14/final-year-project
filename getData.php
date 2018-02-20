<?php 

// This is just an example of reading server side data and sending it to the client.
// It reads a json formatted text file and outputs it.



// Instead you can query your database and parse into JSON etc etc
 $conn = mysqli_connect("127.0.0.1","sdonnellan","","AGRI1",3306);
 //sql query to fetch information of registered user and finds user match.
 $query = mysqli_query($conn, "SELECT * FROM SALEREPORT FOR JSON PATH, ROOT('sampleData')");
 echo $query;
?>