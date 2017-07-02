<?php
  $variable = $_POST["variable"];
  $variable_fut = $variable."_fut";
  $connect_todb = new mysqli('127.5.177.130:3306','mpardo','pardo1234','trackmypower');
  $output = '';
  $result = mysqli_query($connect_todb, "SELECT $variable, $variable_fut FROM `control` WHERE 1");
  $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
  $output .= json_encode(array($row[$variable], $row[$variable_fut]));
  echo $output;  
?>
