<?php
  $id = $_POST["id"];
  $before = $_POST["b"];
  $after = $_POST["a"];

  $connect_todb = new mysqli('127.5.177.130:3306','mpardo','pardo1234','trackmypower');
  
switch ($id) {

  case 1:
      $result = mysqli_query($connect_todb, "UPDATE `control` SET `inv_xantrex` = $before,`inv_xantrex_fut`= $after WHERE 1");  
  break;

  case 2:
      $result = mysqli_query($connect_todb, "UPDATE `control` SET `batt1` = $before,`batt1_fut`= $after WHERE 1");  
  break;

  case 3:
      $result = mysqli_query($connect_todb, "UPDATE `control` SET `batt2` = $before,`batt2_fut`= $after WHERE 1");  
  break;


  default:
    $output .= 1;
}


echo $output
?>
