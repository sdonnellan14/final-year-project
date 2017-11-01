<html>
<body>
 
 <!-- php connection and insert statements syntax developed using a number of different online tutorials: https://stackoverflow.com/questions/16835753/inserting-data-to-table-mysqli-insert,https://stackoverflow.com/questions/34329852/how-to-insert-date-values-into-table,https://community.c9.io/t/connecting-php-to-mysql/1606    -->
 
<?php
$con=mysqli_connect("127.0.0.1","sdonnellan","","AGRI1",3306);
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$InsertRecord=mysqli_query($con,"INSERT INTO MART(MartName, MartProvince, MartCounty, MartAddress, MartContact, MartEmail, MartPassword)
VALUES
('$_POST[MartName]','$_POST[MartProvince]','$_POST[MartCounty]','$_POST[MartAddress]','$_POST[MartContact]','$_POST[MartEmail]','$_POST[MartPassword]')");
 

echo "One record added";
 
mysqli_close($con);
?>
</body>
</html>
 
 
