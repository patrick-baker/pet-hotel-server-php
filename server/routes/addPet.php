<?php

// imports $dbconn which is the database connection
require '../../config.php';


// makes array to insert
// $_POST is a method to access form data sent over from the client side
// think of accessing this data as req.body
$pet = array(
    'owner_id' => $_POST['owner_id'], 
    'petname' => $_POST['petname'],
    'breed' => $_POST['breed'], 
    'color' => $_POST['color'], 
    'checked_in' => $_POST['checked_in']
);

// runs the sql query (insert), to table "pets"
$result = pg_insert($dbconn,"pets", $pet );
if (!$result) {
    echo "An error occurred.\n";
    exit;
} else {
    echo "updated successfully";
}   

?>