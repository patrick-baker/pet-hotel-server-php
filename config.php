<?php
// connects to database at localhost at port 5432 of database pet_hotel
// if connection is not made within 3.5 seconds, the connection is timed out
$connStr = "host=localhost port=5432 dbname=pet_hotel connect_timeout=3.5" ;

//simple check
$dbconn = pg_connect($connStr);
   if(!$dbconn) {
      echo "Error : Unable to open database\n";
   } else {
      echo "Opened database successfully\n";
   }
?>