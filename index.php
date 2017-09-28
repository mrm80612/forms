<!DOCTYPE html>
<html lang="en">
  <head>
    <title>PHP Forms</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
  </head>
  <body>
    <div class="container py-5 my-5">
      <h1>HTML Forms &mdash; Get</h1>
      <form action="results.php" method="post">
        <div class="form-group">
          <label for="first-name">First Name</label>
          <input type="text" class="form-control" id="first-name" aria-describedby="first-name-help" placeholder="First Name" name="first_name">
          <small id="first-name-help" class="form-text text-muted">Enter your first name.</small>
        </div>
        <div class="form-group">
          <label for="last-name">Last Name</label>
          <input type="text" class="form-control" id="last-name" aria-describedby="last-name-help" placeholder="Last Name" name="last_name">
          <small id="last-name-help" class="form-text text-muted">Enter your last name.</small>
        </div>
        <p class="lead mb-0">Would you rather have a cat or a dog?</p>
        <div class="form-check">
          <label class="form-check-label">
            <input class="form-check-input" type="radio" name="animals" id="cats" value="cat">
            Cat
          </label>
        </div>
        <div class="form-check">
          <label class="form-check-label">
            <input class="form-check-input" type="radio" name="animals" id="dogs" value="dog">
            Dog
          </label>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
  </body>
</html>