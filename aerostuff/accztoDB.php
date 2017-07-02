<?php
//authentication (mysql)
$user = htmlspecialchars($_GET["user"]);
$pssd = htmlspecialchars($_GET["pssd"]);
//mysql connection
$connect_todb = new mysqli('127.5.177.130:3306',$user,$pssd,'trackmypower');
echo mysql_errno($connect_todb) . ": " . mysql_error($connect_todb) . "\n";
//obtain data from arduino
$z1 = htmlspecialchars($_GET["z1"]);
$z2 = htmlspecialchars($_GET["z2"]);
$z3 = htmlspecialchars($_GET["z3"]);
$z4 = htmlspecialchars($_GET["z4"]);
$z5 = htmlspecialchars($_GET["z5"]);
$z6 = htmlspecialchars($_GET["z6"]);
$z7 = htmlspecialchars($_GET["z7"]);
$z8 = htmlspecialchars($_GET["z8"]);
$z9 = htmlspecialchars($_GET["z9"]);

//mysql query --> insert data into db

$query .= "INSERT INTO `accrawx` (`idz`, `z1`, `z2`, `z3`, `z4`, `z5`, `z6`, `z7`, `z8`, `z9`,`date_time`) VALUES (NULL, '$z1', '$z2', '$z3', '$z4', '$z5', '$z6', '$z7', '$z8', '$z9',NOW());";
$result = mysqli_multi_query($connect_todb,$query);

include('conversionadc.php');

echo mysql_errno($connect_todb) . ": " . mysql_error($connect_todb) . "\n";
?>
<!--
WEBSITE:
http://track-mypower.rhcloud.com/database/duinotoDB.php?user=mpardo&pssd=pardo1234&
-->
