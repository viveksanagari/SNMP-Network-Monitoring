<?php

   include('config.php');

   $select = $database->query('SELECT * FROM trap_destination');

   while($row = $select->fetchArray(SQLITE3_ASSOC) ) 
     { $community = $row['community']; $ip = $row['ip']; $port = $row['port']; }

   if($select->fetchArray(SQLITE3_ASSOC)==0) { echo "FALSE"; } 
   else { echo   $community."@".$ip .":". $port; }

   $database->close();

?>
