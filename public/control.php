<?php
   $dbhost = '127.5.177.130:3306';
   $dbuser = 'mpardo';
   $dbpass = 'pardo1234';
   
   $conn = mysql_connect($dbhost, $dbuser, $dbpass);
   
   $sql = 'SELECT inv_xantrex FROM control';
   mysql_select_db('trackmypower');
   $retval = mysql_query( $sql, $conn );
   
   while($row = mysql_fetch_assoc($retval)) {
      echo "{$row['inv_xantrex']}";
   }
   
   mysql_close($conn);
?>