<?php
$db = mysqli_connect("localhost", "root", "", "portexps");
if ($db->connect_errno) {
    echo "Failed to connect to MySQL: (" . $db->connect_errno . ") " . $db->connect_error;
}
else {
    echo 'Connected';
}

?>