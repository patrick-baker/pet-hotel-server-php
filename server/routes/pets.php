<?php

require_once 'config.php';

$result = pg_query($dbconn, "SELECT * FROM pets");
if (!$result) {
    echo "An error occurred.\n";
    exit;
}

$arr = pg_fetch_all($result);

echo "<pre>";
print_r($arr);
echo "</pre>";

?>