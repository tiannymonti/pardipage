<?php
  $variable = $_POST["variable"];
  $connect_todb = new mysqli('127.5.177.130:3306','mpardo','pardo1234','trackmypower');
  $output = '';
    if($variable=="energy_med1"){
      $resultMAX = mysqli_query($connect_todb,
        "SELECT MAX(`energy_med1`) FROM `metcentraldata` WHERE `energy_med1` != 0 AND YEAR(`date_time`) = YEAR(NOW());"
      );
      $max =mysqli_fetch_array($resultMAX);
      $max = $max[0];
      echo $max;
    }
    else{
      $result = mysqli_query($connect_todb, "SELECT $variable FROM `metcentraldata` ORDER BY `id` DESC LIMIT 1");
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $output = $row[$variable];
      echo $output;
    }
?>
