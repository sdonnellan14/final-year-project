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
 
$InsertRecord=mysqli_query($con,"INSERT INTO SALEREPORT(MartId, ReportDate, SaleDetails, BullockMaxPrice, BullockMaxKG, BullockMinPrice, BullockMinKG,HeiferMaxPrice, HeiferMaxKG, HeiferMinPrice, HeiferMinKG, WHeiferMaxPrice,WHeiferMaxKG, WHeiferMinPrice, WHeiferMinKG, WBullsMaxPrice, WBullsMaxKG, WBullsMinPrice, WBullsMinKG,CowsMaxPrice, CowsMaxKG, CowsMinPrice, CowsMinKG, BullsMaxPrice, BullsMaxKG, BullsMinPrice, BullsMinKG,DCowsMaxPrice, DCowsMaxKG, DCowsMinPrice, DCowsMinKG, BCowsMaxPrice, BCowsMaxKG, BCowsMinPrice, BCowsMinKG, CalvesMaxPrice, CalvesMaxKG, CalvesMinPrice, CalvesMinKG)
VALUES
('$_POST[MartId]',DATE'$_POST[ReportDate]','$_POST[SaleDetails]','$_POST[BullockMaxPrice]','$_POST[BullockMaxKG]','$_POST[BullockMinPrice]','$_POST[BullockMinKG]','$_POST[HeiferMaxPrice]','$_POST[HeiferMaxKG]','$_POST[HeiferMinPrice]','$_POST[HeiferMinKG]','$_POST[WHeiferMaxPrice]','$_POST[WHeiferMaxKG]','$_POST[WHeiferMinPrice]','$_POST[WHeiferMinKG]','$_POST[WBullMaxPrice]','$_POST[WBullMaxKG]','$_POST[WBullMinPrice]','$_POST[WBullMinKG]','$_POST[CowMaxPrice]','$_POST[CowMaxKG]','$_POST[CowMinPrice]','$_POST[CowMinKG]','$_POST[BullMaxPrice]','$_POST[BullMaxKG]','$_POST[BullMinPrice]','$_POST[BullMinKG]','$_POST[DCowMaxPrice]','$_POST[DCowMaxKG]','$_POST[DCowMinPrice]','$_POST[DCowMinKG]','$_POST[BCowMaxPrice]','$_POST[BCowMaxKG]','$_POST[BCowMinPrice]','$_POST[BCowMinKG]','$_POST[CalfMaxPrice]','$_POST[CalfMaxKG]','$_POST[CalfMinPrice]','$_POST[CalfMinKG]')");
 

echo "One record added";
 
mysqli_close($con);
?>
</body>
</html>
 