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
    //we are passing in the url
    $id = $_GET['id'];

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

    . "ON `orders`.`customer_id` = `customers`.`id` WHERE `orders`.`id` = $id";


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
              </tr>
            </thead>
            <tbody>
<?php while($order = $result->fetch_assoc()){ ?>
              <tr>
                <th scope="row"><?php echo $order['oid'];?></th>
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
              </tr>
<?php } ?>

            </tbody>
          </table>


          <!-- Table End -->
        </div>
<!-- Update form -->
<div class="col col-6">
  <form class="" action="new_order.php" method="post">
    <div class="mb-3">
      We will put current cust. info here
    </div>

    <div class="mb-3">
      <select class="form-select" aria-label="size" name="size">
        <option value="1" selected> Small </option>
        <option value="2"> Medium </option>
        <option value="3"> Large </option>
        <option value="4"> x-Large </option>
      </select>
    </div>

    <div class="mb-3 form-check">
      <input type="checkbox" class="form-check-input" id="toppings" name="toppings[]" value="cheese">
      <label class="form-check-label" for="toppings">Cheese</label>
    </div>

    <div class="mb-3 form-check">
      <input type="checkbox" class="form-check-input" id="toppings" name="toppings[]" value="pepperoni">
      <label class="form-check-label" for="toppings">Pepperoni</label>
    </div>

    <div class="mb-3 form-check">
      <input type="checkbox" class="form-check-input" id="toppings" name="toppings[]" value="ham">
      <label class="form-check-label" for="toppings">Ham</label>
    </div>

    <div class="mb-3">
      <label for="comments" class="form-label">Comments</label>
      <textarea class="form-control" id="comments" name="comments">
      </textarea>
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>
      </div>
    </div>
    <?php include("inc/scripts.php");?>
  </body>
</html>
