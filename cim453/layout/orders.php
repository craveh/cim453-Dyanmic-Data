<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <?php $title = "Orders"; ?>
    <?php include("inc/functions.php");
    loadHeader($title);
    ?>
  </head>
  <body>
    <?php include("inc/nav.php") ?>
    <div class="container">
      <div class="row">
        <div class="col col-8">
          <table class="table table-striped">
            <!-- Table Start -->
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
              <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>123 street</td>
                <td>Ham</td>
                <td>$10</td>
              </tr>
              <tr>
                <th scope="row">2</th>
                <td>Jacob</td>
                <td>Thornton</td>
                <td>123 street</td>
                <td>Ham</td>
                <td>$10</td>
              </tr>

            </tbody>
          </table>
          <!-- Table end -->

        </div>

      </div>

    </div>



    <?php include("inc/scripts.php") ?>
  </body>
</html>
