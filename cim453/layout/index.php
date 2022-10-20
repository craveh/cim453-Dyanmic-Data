<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <?php $title = "Home Page"; ?>
    <?php
    require("inc/db.php"); //require db info
    include("inc/functions.php");
    loadHeader($title);
    ?>

  </head>
  <body>
    <?php include("inc/nav.php") ?>
    <div class="container">
      <div class="row">

        <?php
        $sql = "SELECT * FROM `customers`;";
        $result = $mysqli->query($sql);
        // var_dump($result);

         ?>
        <div class="col col-6">
           <h2>We have
             <?php echo $result->num_rows ;?>
            customers.</h2>
            <?php
            // var_dump($result->fetch_assoc());


             ?>
        </div>


        <div class="col col-6">
          <form action="new_order.php" method="post">
            <div class="mb-3">
              <select class="form-select" aria-label="customer_id" name="customer_id">
                <option selected>Choose customer</option>
                <?php
                while($customer = $result->fetch_assoc()){ ?>
                  <!-- echo $customer["id"]." ".$customer["first_name"]. " ".$customer["last_name"]." <br>"; -->
                  <option value="<?php echo $customer["id"]?>"><?php
                  echo $customer["first_name"]. " ".$customer["last_name"] ?></option>
                <?php }
                ?>
              </select>

            </div>
            <!-- <div class="mb-3">
              <label for="firstName" class="form-label">First Name</label>
              <input type="text" class="form-control" name="firstName" aria-describedby="firstNameHelp" placeholder="First Name">
            </div>
            <div class="mb-3">
              <label for="lastName" class="form-label">LastName</label>
              <input type="text" name="lastName" class="form-control" placeholder="LastName" id="exampleInputPassword1">
            </div>
            <div class="mb-3">
              <label for="address" class="form-label">Address</label>
              <input type="text" name="address" class="form-control" placeholder="Address" id="address">
            </div> -->


            <div class="mb-3 form-check">
              <input type="checkbox" class="form-check-input" id="exampleCheck1" name="toppings[]" value="cheese">
              <label class="form-check-label" for="toppings">Cheese</label>
            </div>
            <div class="mb-3 form-check">
              <input type="checkbox" class="form-check-input" id="exampleCheck1" name="toppings[]" value="Pepperoni">
              <label class="form-check-label" for="toppings">Pepperoni</label>
            </div>
            <div class="mb-3 form-check">
              <input type="checkbox" class="form-check-input" id="exampleCheck1" name="toppings[]" value="Pineapple">
              <label class="form-check-label" for="toppings">Pineapple</label>
            </div>

            <div class="mb-3">
              <label for="comments" class="form-label">Comments</label>
              <textarea type="textarea" name="comments" class="form-control" placeholder="Comments" id="comments" >
              </textarea>
            </div>


            <button type="submit" class="btn btn-primary">Submit</button>
          </form>

        </div>

      </div>

    </div>



    <?php include("inc/scripts.php") ?>
  </body>
</html>
