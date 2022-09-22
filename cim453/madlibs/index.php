<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mad Libs</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <link href="style.css" rel="stylesheet">

  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col col-12 text-center mt-3">
          <h1>Mad Libs</h1>
        </div>
        <div class="col-12">
          <form action="madlibs.php" method="post">
            <!-- Link: https://imgur.com/G5bBzc8 -->
            <div class="mb-3">
              <label class="form-label" for="place">Foreign Country:</label>
              <input type="text" class="form-control" name="country" required>
            </div>
            <div class="mb-3">
              <label class="form-label" for="adjective">Adverb:</label>
              <input type="text" class="form-control" name="adverbs[]" required>
            </div>
            <div class="mb-3">
              <label class="form-label" for="adjective">Adjective:</label>
              <input type="text" class="form-control" name="adjectives[]" required>
            </div>
            <div class="mb-3">
              <label class="form-label" for="animal">Animal:</label>
              <input type="text" class="form-control" name="animal" required>
            </div>
            <div class="mb-3">
              <label class="form-label" for="ing-verb">Verb ending in ing:</label>
              <input type="text" class="form-control" name="ing-verb[]" required>
            </div>
            <div class="mb-3">
              <label class="form-label" for="verb">Verb:</label>
              <input type="text" class="form-control" name="verbs[]" required>
            </div>
            <div class="mb-3">
              <label class="form-label" for="ing-verb">Verb ending in ing:</label>
              <input type="text" class="form-control" name="ing-verb[]" required>
            </div>
            <div class="mb-3">
              <label class="form-label" for="adjective">Adverb:</label>
              <input type="text" class="form-control" name="adverbs[]" required>
            </div>
            <div class="mb-3">
              <label class="form-label" for="adjective">Adjective:</label>
              <input type="text" class="form-control" name="adjectives[]" required>
            </div>
            <div class="mb-3">
              <label class="form-label" for="place">Place:</label>
              <input type="text" class="form-control" name="place" required>
            </div>
            <div class="mb-3">
              <label class="form-label" for="liquid">Type of liquid:</label>
              <input type="text" class="form-control" name="liquid" required>
            </div>
            <div class="mb-3">
              <label class="form-label" for="clothing">Body Part:</label>
              <input type="text" class="form-control" name="body-part" required>
            </div>
            <div class="mb-3">
              <label class="form-label" for="verb">Verb:</label>
              <input type="text" class="form-control" name="verbs[]" required>
            </div>
            <div class="d-flex justify-content-center mb-3">
              <button type="submit" class="btn btn-primary btn-lg">Submit</button>

            </div>

          </form>
        </div>

      </div>
    </div>

  </body>
</html>
