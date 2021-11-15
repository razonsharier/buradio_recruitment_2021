<?php

$conn = mysqli_connect("localhost", "root", "", "buradio_join");
mysqli_set_charset($conn, 'utf8');
// Check connection
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

?>
