<?php

   include('config.php');

   $select = $database->query('SELECT * FROM status_table');

   while($row = $select->fetchArray(SQLITE3_ASSOC) ) 
     { echo   $row['domain_name']." | ".$row['status']." | ".$row['ntime']." | ".$row['oldstatus']." | ".$row['oldtime']."\n"; }

   if($select->fetchArray(SQLITE3_ASSOC)==0)
     { echo "FALSE"; }

   $database->close();

?>
