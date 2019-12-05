<?php

require '../../config.php';

$where_condition = array(
     "id" => $_GET['id']
);

$data = array(
     "petname" => $_GET['petname']
);

$result = pg_update($dbconn, 'pets', $data, $where_condition);

// $sql = `update users set petname = $_POST[newpetname] where id = $_POST[petid]`;
// $result = pg_query($dbconn, "update users set petname = $_POST[newpetname] where id = $_POST[petid]");

if (!$result) {
    echo "An error occurred.\n";
    echo pg_last_error($dbconn);
    exit;
} else {
    echo"Data is updated: $result";
}

?>