<?php
require("inc/db.php");

$order = $_POST;

$customer_id = $order['customer_id'];

$toppings="";
if(isset($order['toppings'])){
  foreach ($order['toppings'] as $key => $value) {
    // $toppings = $toppings.", ".$value;
    $toppings .= ", ".$value;
  }
}

$size = 3;
$total = 20.25;


$sql = "INSERT INTO `orders` (`id`, `customer_id`, `toppings`, `size`, `total`) VALUES (NULL, '$customer_id', '$toppings', '$size', '$total'); ";

// echo $sql;

$result = $mysqli->query($sql);

echo $mysqli->insert_id;

 ?>
