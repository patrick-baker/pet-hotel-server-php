<?php
$connStr = "host=localhost port=5432 dbname=pet_hotel connect_timeout=3.5" ;

//simple check
$dbconn = pg_connect($connStr);
   if(!$dbconn) {
      echo "Error : Unable to open database\n";
   } else {
      echo "Opened database successfully\n";
   }

$result = pg_query($dbconn, `select * from "owners"`);

var_dump(pg_fetch_all($result));

?>