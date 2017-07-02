<?php
//authentication (mysql)
$user = htmlspecialchars($_GET["user"]);
$pssd = htmlspecialchars($_GET["pssd"]);
//mysql connection
$connect_todb = new mysqli('127.5.177.130:3306',$user,$pssd,'trackmypower');
echo mysql_errno($connect_todb) . ": " . mysql_error($connect_todb) . "\n";
//obtain data from arduino
$y1 = htmlspecialchars($_GET["y1"]);
$y2 = htmlspecialchars($_GET["y2"]);
$y3 = htmlspecialchars($_GET["y3"]);
$y4 = htmlspecialchars($_GET["y4"]);
$y5 = htmlspecialchars($_GET["y5"]);
$y6 = htmlspecialchars($_GET["y6"]);
$y7 = htmlspecialchars($_GET["y7"]);
$y8 = htmlspecialchars($_GET["y8"]);
$y9 = htmlspecialchars($_GET["y9"]);

//mysql query --> insert data into db

$query .= "INSERT INTO `accrawy` (`idy`, `y1`, `y2`, `y3`, `y4`, `y5`, `y6`, `y7`, `y8`, `y9`,`date_time`) VALUES (NULL, '$y1', '$y2', '$y3', '$y4', '$y5', '$y6', '$y7', '$y8', '$y9',NOW());";
$result = mysqli_multi_query($connect_todb,$query);

echo mysql_errno($connect_todb) . ": " . mysql_error($connect_todb) . "\n";
?>
<!--
WEBSITE:
http://track-mypower.rhcloud.com/database/duinotoDB.php?user=mpardo&pssd=pardo1234&
-->
