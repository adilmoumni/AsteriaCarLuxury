<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */




/* Attempt to connect to MySQL database */
$link = mysqli_connect('localhost', 'root', '', 'asteriac_asteria');

// Check connection
if ($link === false) {
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
