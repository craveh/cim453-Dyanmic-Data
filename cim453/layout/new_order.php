<?php
require("inc/db.php");

$order = $_POST;

$customer_id = $order['customer_id'];

$toppings = "";

$topping_price = 1.50;

$subtotal = 0;

if(isset($order['toppings'])) {
  foreach ($order['toppings'] as $key => $value) {
    // code...
    //$toppings = $toppings .  $value .", ";
    $toppings .=  $value .", ";

    $subtotal += $topping_price;
  }
}

//echo $subtotal;

//too many ifs are better with a switch
// if($size == 1) {
//   $subtotal += 10;
// } elseif ($size == 2) {
//   $subtotal += 15;
// }
$size = $order['size'];

switch ($size) {
    case 1:
    // code...
    $subtotal += 10;
    break;
    case 2:
    // code...
    $subtotal += 15;
    break;
    case 3:
    // code...
    $subtotal += 20;
    break;
    case 4:
    // code...
    $subtotal += 25;
    break;
    default:
    // code...
    break;
}

$total = $subtotal;


$sql = "INSERT INTO `orders` (`id`, `customer_id`, `toppings`, `size`, `total`) VALUES (NULL, '$customer_id', '$toppings', '$size', '$total');";

//echo $sql;

$result = $mysqli->query($sql);

//echo $size. " ". $total. " " . $mysqli->insert_id;

// Header browser interaction
header("location: orders.php");

?>
