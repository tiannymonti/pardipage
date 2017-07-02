<?php
//authentication (mysql)
$user = htmlspecialchars($_GET["user"]);
$pssd = htmlspecialchars($_GET["pssd"]);
//mysql connection
$connect_todb = new mysqli('127.5.177.130:3306',$user,$pssd,'trackmypower');
echo mysql_errno($connect_todb) . ": " . mysql_error($connect_todb) . "\n";
//obtain data from arduino
$rpm  = htmlspecialchars($_GET["rpm"]);
$chargetime = htmlspecialchars($_GET["chargetime"]);
$constate = htmlspecialchars($_GET["constate"]);


//mysql query --> insert data into db

if($rpm > 700){

	$rpm = 0;
}

$query .= "INSERT INTO `windturbinedata` (`id`, `rpm`, `chargetime`, `constate`,  `date_time`) VALUES (NULL, '$rpm', '$chargetime', '$constate', NOW());";
$result = mysqli_multi_query($connect_todb,$query);

echo mysql_errno($connect_todb) . ": " . mysql_error($connect_todb) . "\n";
?>
<!--
WEBSITE:
http://track-mypower.rhcloud.com/database/duinotoDB.php?user=mpardo&pssd=pardo1234&
-->
