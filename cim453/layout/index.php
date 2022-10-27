<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <?php

    $title = "Home Page";
    // Always "require" the database connection when database info is needed
    require("inc/db.php");//prevents further execution
    include("inc/functions.php");
    loadHeader($title);

    ?>

  </head>
  <body>
    <?php include("inc/nav.php");?>
    <div class="container">
      <div class="row">
        <?php
        $sql = "SELECT * FROM `customers`;";

        $result = $mysqli->query($sql);

        //var_dump($result);

        ?>
        <div class="col col-6">
          <h2>We Have
            <?php echo $result->num_rows; ?>
            Customers</h2>
        </div>

        <div class="col col-6">
          <form class="" action="new_order.php" method="post">
            <div class="mb-3">
              <select class="form-select" aria-label="customer_id" name="customer_id">
  <option selected>Choose Customer</option>
  <?php
  //var_dump( $result->fetch_assoc() );
  //Iterating the customers table
  while($customer = $result->fetch_assoc()){ ?>

    <option value="<?php echo $customer["id"]; ?>">
      <?php echo $customer["first"] . " " . $customer["last"];?>
    </option>

  <?php } ?>
          </select>
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
