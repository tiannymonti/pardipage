<?php
//authentication (mysql)
$user = htmlspecialchars($_GET["user"]);
$pssd = htmlspecialchars($_GET["pssd"]);
//mysql connection
$connect_todb = new mysqli('127.5.177.130:3306',$user,$pssd,'trackmypower');
echo mysql_errno($connect_todb) . ": " . mysql_error($connect_todb) . "\n";
//obtain data from arduino
$x1 = htmlspecialchars($_GET["x1"]);
$x2 = htmlspecialchars($_GET["x2"]);
$x3 = htmlspecialchars($_GET["x3"]);
$x4 = htmlspecialchars($_GET["x4"]);
$x5 = htmlspecialchars($_GET["x5"]);
$x6 = htmlspecialchars($_GET["x6"]);
$x7 = htmlspecialchars($_GET["x7"]);
$x8 = htmlspecialchars($_GET["x8"]);
$x9 = htmlspecialchars($_GET["x9"]);

//mysql query --> insert data into db

$query .= "INSERT INTO `accrawx` (`idx`, `x1`, `x2`, `x3`, `x4`, `x5`, `x6`, `x7`, `x8`, `x9`,`date_time`) VALUES (NULL, '$x1', '$x2', '$x3', '$x4', '$x5', '$x6', '$x7', '$x8', '$x9',NOW());";
$result = mysqli_multi_query($connect_todb,$query);

echo mysql_errno($connect_todb) . ": " . mysql_error($connect_todb) . "\n";
?>
<!--
WEBSITE:
http://track-mypower.rhcloud.com/database/duinotoDB.php?user=mpardo&pssd=pardo1234&
-->
