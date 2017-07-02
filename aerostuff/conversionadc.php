<?php
  $connect_todb = new mysqli('localhost','mpardo','pardo1234','trackmypower');
  echo mysqli_errno($connect_todb) . ": " . mysqli_error($connect_todb) . "\n";
  $result = mysqli_query($connect_todb, "SELECT * FROM `accrawx` ORDER BY idx DESC LIMIT 1");
  $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
  $fecha = $row["date_time"];
  
  for($i = 1; $i < 10; $i++){
	$variable = "x$i"; 
    $xyz =  explode(",", $row[$variable]);
    $cuenta = 0;
    for($c = 11*($i-1); $c < 11*$i; $c++){
		$xx[$c] = ((($xyz[$cuenta]*3.3)/1024)-1.62)/0.460;
	    $cuenta = $cuenta + 1;
	}    
  }
  

  $result = mysqli_query($connect_todb, "SELECT * FROM `accrawy` ORDER BY idy DESC LIMIT 1");
  $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
  for($i = 1; $i < 10; $i++){
	$variable = "y$i"; 
    $xyz =  explode(",", $row[$variable]);
    $cuenta = 0;
    for($c = 11*($i-1); $c < 11*$i; $c++){
		$yy[$c] = ((($xyz[$cuenta]*3.3)/1024)-1.671)/0.460;
	    $cuenta = $cuenta + 1;
	}    
  }
  

  $result = mysqli_query($connect_todb, "SELECT * FROM `accrawz` ORDER BY idz DESC LIMIT 1");
  $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
  for($i = 1; $i < 10; $i++){
	$variable = "z$i"; 
    $xyz =  explode(",", $row[$variable]);
    $cuenta = 0;
    for($c = 11*($i-1); $c < 11*$i; $c++){
		$zz[$c] =((($xyz[$cuenta]*3.3)/1024)-1.621)/0.460;
	    $cuenta = $cuenta + 1;
	}    
  }
  
  echo count($xx);

  for($i = 0; $i < 99; $i++){
      $query = "INSERT INTO `accdata` (`ids`, `xaxis`, `yaxis`, `zaxis`,`date_time`) VALUES (NULL, '$xx[$i]', '$yy[$i]', '$zz[$i]','$fecha');";
      $result = mysqli_multi_query($connect_todb,$query);
      echo mysqli_errno($connect_todb) . ": " . mysqli_error($connect_todb) . "\n";
 }
?>
