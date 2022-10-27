<?php
require("inc/db.php");

$id = $_GET['id'];

if(isset($_GET['confirm'])) {
  $sql = "DELETE FROM `orders` WHERE `orders`.`id` = $id";

  $result = $mysqli->query($sql);

  header("location: orders.php");

} else { ?>

  <p>Are you sure?
    <a href="?id=<?php echo $id;?>&confirm=1">Yes</a>
<!-- No Takes them back to orders -->
    <a href="orders.php">No</a>
  </p>

<?php
}

?>
