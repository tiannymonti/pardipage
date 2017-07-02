<?php
  //$windir = $_POST['variable'];
  $connect_todb = new mysqli('localhost','mpardo','pardo1234','trackmypower');

  //obtener fechas
  $output="";

  $result = mysqli_query($connect_todb, "SELECT date_time FROM trackmypower.wundergrounddata order by date_time desc limit 1;");
  
   while ($row = mysqli_fetch_array($result)){
            $output = $row["date_time"];
    }

  
  $stop_date=new DateTime($output);
  $stop_date->modify('-1 day');
  $dateto1= $stop_date->format('Y-m-d');
  $datetoshow1= $stop_date->format('m-d');
  
  $stop_date->modify('-1 day');
  $dateto2= $stop_date->format('Y-m-d');
  $datetoshow2= $stop_date->format('m-d');
  
  $stop_date->modify('-1 day');
  $dateto3= $stop_date->format('Y-m-d');
  $datetoshow3= $stop_date->format('m-d');
  


  $output = '';
  $c="1";
  $c0="0";
  $c1="0";
  $c2="0";
  $c3="0";
  $c4="0";
  $c5="0";
  $c6="0";
  $c7="0";

    $result = mysqli_query($connect_todb, "SELECT wind_dir,wind_speed FROM trackmypower.wundergrounddata where date_time between '".$dateto1." 00:00:00' and '".$dateto1." 23:59:59' order by date_time;");
    
    while ($row = mysqli_fetch_array($result)){
            $winddir =(int) $row["wind_dir"];
            $windsp =  (int) $row["wind_speed"];
            $i=round($winddir/45);
            switch ($i) {
				    case 0:
				    	if($windsp>$c0){$c0=$windsp;}
				    	if($windsp=null){$c0="0";}
				        break;
				    case 1:
				        if($windsp>$c1){$c1=$windsp;}
				        if($windsp=0){$c1="0";}
				        break;
				    case 2:
				        if($windsp>$c2){$c2=$windsp;}
				        if($windsp=null){$c2="0";}
				        break;
				    case 3:
				        if($windsp>$c3){$c3=$windsp;}
				        if($windsp=null){$c3="0";}
				        break;
				    case 4:
				        if($windsp>$c4){$c4=$windsp;}
				        if($windsp=null){$c4="0";}
				        break;
				    case 5:
				        if($windsp>$c5){$c5=$windsp;}
				        if($windsp=null){$c5="0";}
				        break;
				    case 6:
				        if($windsp>$c6){$c6=$windsp;}
				        if($windsp=null){$c6="0";}
				        break;
				    case 7:
				        if($windsp>$c7){$c7=$windsp;}
				        if($windsp=null){$c7="0";}
				        break;   
			}
    }
  
    $a="0";
    $output .= $c0;
    $output .= ",".$c1;
    $output .= ",".$c2;
    $output .= ",".$c3;
    $output .= ",".$c4;
    $output .= ",".$c5;
    $output .= ",".$c6;
    $output .= ",".$c7;
  	$output .= "/";

  $c="1";
  $c0="0";
  $c1="0";
  $c2="0";
  $c3="0";
  $c4="0";
  $c5="0";
  $c6="0";
  $c7="0";

    $result = mysqli_query($connect_todb, "SELECT wind_dir,wind_speed FROM trackmypower.wundergrounddata where date_time between '".$dateto2." 00:00:00' and '".$dateto2." 23:59:59' order by date_time;");
    
    while ($row = mysqli_fetch_array($result)){
            $winddir =(int) $row["wind_dir"];
            $windsp =  (int) $row["wind_speed"];
            $i=round($winddir/45);
            switch ($i) {
				    case 0:
				    	if($windsp>$c0){$c0=$windsp;}
				    	if($windsp=null){$c0="0";}
				        break;
				    case 1:
				        if($windsp>$c1){$c1=$windsp;}
				        if($windsp=0){$c1="0";}
				        break;
				    case 2:
				        if($windsp>$c2){$c2=$windsp;}
				        if($windsp=null){$c2="0";}
				        break;
				    case 3:
				        if($windsp>$c3){$c3=$windsp;}
				        if($windsp=null){$c3="0";}
				        break;
				    case 4:
				        if($windsp>$c4){$c4=$windsp;}
				        if($windsp=null){$c4="0";}
				        break;
				    case 5:
				        if($windsp>$c5){$c5=$windsp;}
				        if($windsp=null){$c5="0";}
				        break;
				    case 6:
				        if($windsp>$c6){$c6=$windsp;}
				        if($windsp=null){$c6="0";}
				        break;
				    case 7:
				        if($windsp>$c7){$c7=$windsp;}
				        if($windsp=null){$c7="0";}
				        break;   
			}
    }
  
    $a="0";
    $output .= $c0;
    $output .= ",".$c1;
    $output .= ",".$c2;
    $output .= ",".$c3;
    $output .= ",".$c4;
    $output .= ",".$c5;
    $output .= ",".$c6;
    $output .= ",".$c7;
  	$output .= "/";


$c="1";
  $c0="0";
  $c1="0";
  $c2="0";
  $c3="0";
  $c4="0";
  $c5="0";
  $c6="0";
  $c7="0";

    $result = mysqli_query($connect_todb, "SELECT wind_dir,wind_speed FROM trackmypower.wundergrounddata where date_time between '".$dateto3." 00:00:00' and '".$dateto3." 23:59:59' order by date_time;");
    
    while ($row = mysqli_fetch_array($result)){
            $winddir =(int) $row["wind_dir"];
            $windsp =  (int) $row["wind_speed"];
            $i=round($winddir/45);
            switch ($i) {
				    case 0:
				    	if($windsp>$c0){$c0=$windsp;}
				    	if($windsp=null){$c0="0";}
				        break;
				    case 1:
				        if($windsp>$c1){$c1=$windsp;}
				        if($windsp=0){$c1="0";}
				        break;
				    case 2:
				        if($windsp>$c2){$c2=$windsp;}
				        if($windsp=null){$c2="0";}
				        break;
				    case 3:
				        if($windsp>$c3){$c3=$windsp;}
				        if($windsp=null){$c3="0";}
				        break;
				    case 4:
				        if($windsp>$c4){$c4=$windsp;}
				        if($windsp=null){$c4="0";}
				        break;
				    case 5:
				        if($windsp>$c5){$c5=$windsp;}
				        if($windsp=null){$c5="0";}
				        break;
				    case 6:
				        if($windsp>$c6){$c6=$windsp;}
				        if($windsp=null){$c6="0";}
				        break;
				    case 7:
				        if($windsp>$c7){$c7=$windsp;}
				        if($windsp=null){$c7="0";}
				        break;   
			}
    }
  
    $a="0";
    $output .= $c0;
    $output .= ",".$c1;
    $output .= ",".$c2;
    $output .= ",".$c3;
    $output .= ",".$c4;
    $output .= ",".$c5;
    $output .= ",".$c6;
    $output .= ",".$c7;
  	$output .= "/";

  	$output .= $datetoshow1."/";
  	$output .= $datetoshow2."/";
  	$output .= $datetoshow3."/";

    echo $output; 

?>