<?php

require '../../config.php';


// makes array to insert
$pet = array(
    'owner_id' => $_POST['owner_id'], 
    'petname' => $_POST['petname'],
    'breed' => $_POST['breed'], 
    'color' => $_POST['color'], 
    'checked_in' => $_POST['checked_in']
);

// Does sql query (insert)
$result = pg_insert($dbconn,"pets", $pet );
if (!$result) {
    echo "An error occurred.\n";
    exit;
} else {
    echo "updated successfully";
}   

?>