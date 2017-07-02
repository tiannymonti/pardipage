<?php
  include 'dbconnection.php';
  $origin = $_POST['origin'];
  $emparray = array();
  $max_array = array();
  for ($month = 1; $month <= 12; $month++) {
    $resultMIN = mysqli_query($connect_todb,
      "SELECT MIN(`energy_med1`) FROM `metcentraldata` WHERE `energy_med1` != 0 AND MONTH(`date_time`) = ".$month." AND YEAR(`date_time`) = YEAR(NOW());"
    );
    $resultMAX = mysqli_query($connect_todb,
      "SELECT MAX(`energy_med1`) FROM `metcentraldata` WHERE `energy_med1` != 0 AND MONTH(`date_time`) = ".$month." AND YEAR(`date_time`) = YEAR(NOW());"
    );
    $resultMONTH = mysqli_query($connect_todb,
      "SELECT MONTH(NOW());"
    );
    $min =mysqli_fetch_array($resultMIN);
    $min = $min[0];
    $max =mysqli_fetch_array($resultMAX);
    $max = $max[0];
    if (is_null($min)){
      $min = 0;
    }
    if (is_null($max)){
      $max = 0;
    }
    $whichmonth =mysqli_fetch_array($resultMONTH);
    $whichmonth = $whichmonth[0];
    switch ($month){
      case 1:
        $monthStr = "January";
        break;
      case 2:
        $monthStr = "February";
        break;
      case 3:
        $monthStr = "March";
        break;
      case 4:
        $monthStr = "April";
        break;
      case 5:
        $monthStr = "May";
        break;
      case 6:
        $monthStr = "June";
        break;
      case 7:
        $monthStr = "July";
        break;
      case 8:
        $monthStr = "August";
        break;
      case 9:
        $monthStr = "September";
        break;
      case 10:
        $monthStr = "October";
        break;
      case 11:
        $monthStr = "November";
        break;
      case 12:
        $monthStr = "December";
        break;
    }
    if ($month == $whichmonth){
      $thismonth = $max-$min;
    }
    $emparray[$monthStr] = array($max-$min,$max);
    array_push($max_array,$max-$min);
  }
  if ($origin == "/charts/data/")
  {
    $echovar = json_encode($emparray);
    echo $echovar;
  }
  elseif ($origin == "/Home.php") {
    $maximum = max($max_array);
    echo json_encode(array($thismonth,$maximum));
  }
?>
