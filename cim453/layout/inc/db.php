<?php
//the ""  is for the password
$mysqli = new mysqli("localhost", "root", "", "pizza_orders");

if ($mysqli->connect_errno) {
  printf("Database connection failed %s\n", $mysqli->connect_errno);
  exit();
}

 ?>
