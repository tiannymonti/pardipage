<?php
  $connect_todb = new mysqli('127.5.177.130:3306','mpardo','pardo1234','trackmypower');
  $output = '';
  $result = mysqli_query($connect_todb, "SELECT inv_xantrex, inv_xantrex_fut FROM `control` WHERE 1");
  $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
  
  if ($row['inv_xantrex'] != $row['inv_xantrex_fut']){ 
      $output .= 1;
  }else{
      $output .= 0;   
  }
  echo $output;
?>