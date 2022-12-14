<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <?php $title = "Orders"; ?>
    <?php include("inc/db.php");?>
    <?php include("inc/functions.php");?>
    <?php include("inc/head.php");?>
    <?php include("inc/styles.php");?>
  </head>
  <body>
    <?php include("inc/nav.php");?>
    <?php

    //$sql = "SELECT * FROM `orders`";
    $sql = "SELECT \n"

    . "`orders`.`customer_id`,\n"

    . "`orders`.`id` AS 'oid',  \n"

    . "`orders`.`toppings`,\n"

    . "`orders`.`size`,  \n"

    . "`orders`.`total`,  \n"

    . "`customers`.`id` AS 'cid',\n"

    . "`customers`.`first`,\n"

    . "`customers`.`last`,\n"

    . "`customers`.`address`,\n"

    . "`customers`.`address_2`,\n"

    . "`customers`.`city`,\n"

    . "`customers`.`state`,\n"

    . "`customers`.`zip`\n"

    . "FROM `orders`\n"

    . "JOIN `customers`\n"

    . "ON `orders`.`customer_id` = `customers`.`id`;";


    $result = $mysqli->query($sql);


    ?>

    <div class="container">
      <div class="row">
        <div class="col col-8">
          <h2>We Have
            <?php echo $result->num_rows; ?>
            Orders</h2>

          <!-- Table start -->
          <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">First</th>
                <th scope="col">Last</th>
                <th scope="col">Address</th>
                <th scope="col">Toppings</th>
                <th scope="col">Total</th>
                <th scope="col">Actions</th>
              </tr>
            </thead>
            <tbody>
              <?php while($order = $result->fetch_assoc()){ ?>
              <tr>
                <th scope="row">
                  <a href="order_details.php?id=<?php echo $order['oid'];?>">
                      <?php echo $order['oid'];?>
                  </a>
                </th>
                <td><?php echo $order['first'];?></td>
                <td><?php echo $order['last'];?></td>
                <td>
                  <?php echo $order['address'];?>
                  <?php echo $order['address_2'];?>
                  <?php echo $order['city'];?>
                  <?php echo $order['state'];?>
                  <?php echo $order['zip'];?>
                </td>
                <td><?php echo $order['toppings'];?></td>
                <td><?php echo $order['total'];?></td>
                <td><a href="delete_order.php?id=<?php echo $order['oid'];?>">
                    Delete
                </a></td>
              </tr>
<?php } ?>

            </tbody>
          </table>
          <!-- Table End -->
        </div>
      </div>
    </div>
    <?php include("inc/scripts.php");?>
  </body>
</html>
