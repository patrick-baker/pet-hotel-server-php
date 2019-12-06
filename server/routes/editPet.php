<?php

// imports $dbconn which is the database connection
require '../../config.php';

// following variable defines conditions for database of where to make query
// $_GET accesses url parameter at this route
// for example at localhost:8000/server/routes/editPet.php?id=1&petname=queso
$where_condition = array(
     "id" => $_GET['id']
);

// following variable is what to change petname to of chosen row
// $_GET accesses url parameter at this route
$data = array(
     "petname" => $_GET['petname']
);

// runs database query at "pets" table with the above conditions
$result = pg_update($dbconn, 'pets', $data, $where_condition);

if (!$result) {
    echo "An error occurred.\n";
    echo pg_last_error($dbconn);
    exit;
} else {
    echo"Data is updated: $result";
}

?>