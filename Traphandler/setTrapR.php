<?php

   include('config.php');

   if(!($database->exec('CREATE TABLE IF NOT EXISTS trap_destination(ip VARCHAR NOT NULL,port INT NOT NULL,community STRING NOT NULL);'))) 
	{$database->lastErrorMsg();} 
  
   if(!($database->exec("INSERT INTO trap_destination (ip,port,community) VALUES ('$_GET[ip]',$_GET[port],'$_GET[community]');"))) 
	{echo "FALSE";} 
   else
	{echo "OK";}
	
   $database->close();

?>
