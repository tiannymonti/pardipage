<?php
  include "dbconnection.php";

  //Obtener fechas
  $output="";
  $result = mysqli_query($connect_todb, "SELECT date_time FROM trackmypower.wundergrounddata order by date_time desc limit 1;");
  
   while ($row = mysqli_fetch_array($result)){
    $output = $row["date_time"];
   }
  $barlabel="";
  $hsp="";
  $nday=7;
  $stop_date=new DateTime($output);

  //Ciclo para cada día
  for ($i = 1; $i <= $nday; $i++){
    
    $dateto1= $stop_date->format('Y-m-d');
    $barlabel.='"'.$stop_date->format('l').'"';
    if ($i != $nday){
    $barlabel.=",";
    }
    $stop_date->modify('-1 day');
   
    $output = '';
    $inte=0;
    $a=1;
    $inte=0.0;

    //Obtener radiación solar del día
    $result = mysqli_query($connect_todb, "SELECT id,solar_radiation FROM trackmypower.wundergrounddata where date_time between '".$dateto1." 00:00:00' and '".$dateto1." 23:59:59' order by date_time;");
    $nrows =  mysqli_num_rows($result);

    while ($row = mysqli_fetch_array($result)){
      $id= (int) $row["id"];
      $sol =(int) $row["solar_radiation"];
      //Método del trapecio
      if($a==1 || $a==$nrows)
      {
          $inte = $inte + ($sol/24);
      }else{
          $inte = $inte + ($sol/12);
      }
      $a=$a+1;
    }
    $hsp.=round(($inte/1000),3);

    if ($i != $nday){
    $hsp.=",";
    }
  }
  $output=$hsp."/".$barlabel;
  echo $output;
?>