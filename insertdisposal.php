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

$InsertRecord=mysqli_query($con,"INSERT INTO DISPOSAL(DisposalName, DisposalProvince, DisposalCounty, DisposalAddress, DisposalContact, DisposalEmail, DisposalPassword, ZeroThreeMonths, ThreeSixMonths, SixTwelveMonths, TwelveTwentyFourMonths, TwentyFourFortyEightMonths, FortyEightMonths, Sheep)
VALUES
('$_POST[DisposalName]','$_POST[DisposalProvince]','$_POST[DisposalCounty]','$_POST[DisposalAddress]','$_POST[DisposalContact]','$_POST[DisposalEmail]','$_POST[DisposalPassword]','$_POST[ZeroThreeMonths]','$_POST[ThreeSixMonths]','$_POST[SixTwelveMonths]','$_POST[TwelveTwentyFourMonths]','$_POST[TwentyFourFortyEightMonths]','$_POST[FortyEightMonths]','$_POST[Sheep]')");
 

echo "One record added";
 
mysqli_close($con);
?>
</body>
</html>