<?php
//new mysqli(): Creates a new connection to MySql

//$mysqli = new mysqli(...): Stores the connection info

$mysqli = new mysqli("localhost", "root", "", "pizza_orders");

/* check connection */
if ($mysqli->connect_errno) {
    printf("Connect failed: ", $mysqli->connect_error);
    exit();
}
