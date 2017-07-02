<?php
  //$windir = $_POST['variable'];
  include "dbconnection.php";
  //$connect_todb = new mysqli('localhost','root','','trackmypower');

  //obtener fechas
  $output="";
  $result = mysqli_query($connect_todb, "SELECT date_time FROM trackmypower.wundergrounddata order by date_time desc limit 1;");
  
   while ($row = mysqli_fetch_array($result)){
            //$pave.= $row[2];
            $output = $row["date_time"];
    }
  $barlabel="";
  $hsp="";
  $nday=7;
  //echo $output."\n";
  $stop_date=new DateTime($output);
  //$stop_date->modify('-1 day');
  for ($i = 1; $i <= $nday; $i++){
  
  $dateto1= $stop_date->format('Y-m-d');
  $barlabel.='"'.$stop_date->format('l').'"';
  if ($i != $nday){
  $barlabel.=",";
  }
  $stop_date->modify('-1 day');
  //echo $dateto1."\n";
  
  $output = '';
  $acum=0;
  $a=1;
  $inte=0.0;
  $result = mysqli_query($connect_todb, "SELECT id,solar_radiation FROM trackmypower.wundergrounddata where date_time between '".$dateto1." 00:00:00' and '".$dateto1." 23:59:59' order by date_time;");
    
  while ($row = mysqli_fetch_array($result)){
        $id= (int) $row["id"];
        $sol =(int) $row["solar_radiation"];
        $acum=$acum+$sol;
        $inte=$inte+($sol*0.00695/24);
        $inte=round($inte,3);
        if($a==1)
          {
            $pri=$id;
            $a=$a+1;
          }
  }
  $hsp.=$inte;
  if ($i != $nday){
  $hsp.=",";
  }

  }
  //echo $acum."\n";
  //echo $id."\n";
  //echo $pri."\n";
  //$prom=$acum/($id-$pri);
  //echo $prom."\n";
  $output=$hsp."/".$barlabel;
  //echo $hsp;
  //echo $barlabel;
  echo $output;
?>