<?php
  $id = $_POST["id"];
  $state = $_POST["state"];
  $connect_todb = new mysqli('127.5.177.130:3306','mpardo','pardo1234','trackmypower');
  
switch ($id) {

  case 1:
    if ($state == 'true'){
      $result = mysqli_query($connect_todb, "UPDATE `control` SET `inv_xantrex_fut`='1' WHERE 1");  
      $output .= 1;
    }else{
      $result = mysqli_query($connect_todb, "UPDATE `control` SET `inv_xantrex_fut`='0' WHERE 1");  
      $output .= 1;
    } 
  break;

  case 2:
    if ($state == 'true'){
      $result = mysqli_query($connect_todb, "UPDATE `control` SET `batt1_fut`='1' WHERE 1");  
      $output .= 1;
    }else{
      $result = mysqli_query($connect_todb, "UPDATE `control` SET `batt1_fut`='0' WHERE 1");  
      $output .= 1;
    } 
  break;

  case 3:
    if ($state == 'true'){
      $result = mysqli_query($connect_todb, "UPDATE `control` SET `batt2_fut`='1' WHERE 1");  
      $output .= 1;
    }else{
      $result = mysqli_query($connect_todb, "UPDATE `control` SET `batt2_fut`='0' WHERE 1");  
      $output .= 1;
    } 
  break;


  default:
    $output .= 1;
}


echo $output
?>
