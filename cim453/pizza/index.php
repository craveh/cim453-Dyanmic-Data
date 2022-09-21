<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pizza Order</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>


  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col col-12">
          <h1>Pizza Order</h1>
        </div>
        <div class="col col-6">
          <form action="pizza.php" method="post">
            <div class="mb-3">
              <label for="firstName" class="form-label">First Name</label>
              <input type="text" class="form-control" name="firstName" aria-describedby="firstNameHelp" placeholder="First Name">
              <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
            </div>
            <div class="mb-3">
              <label for="lastName" class="form-label">LastName</label>
              <input type="text" name="lastName" class="form-control" placeholder="LastName" id="exampleInputPassword1">
            </div>
            <div class="mb-3">
              <label for="address" class="form-label">Address</label>
              <input type="text" name="address" class="form-control" placeholder="Address" id="address">
            </div>


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


  </body>
</html>
