<!DOCTYPE html>
<html lang="en">
  <head>
    <title>PHP Forms</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
  </head>
  <body>
    <?php
      // Set variables
      $first_name = htmlspecialchars($_POST["first_name"]);
      $last_name = htmlspecialchars($_POST["last_name"]);
      $food = htmlspecialchars($_POST["food"]);
    ?>
    <div class="container py-5 my-5">
      <pre>
      </pre>
      <h1>Hello, <?php echo $first_name; ?></h1>
      <?php if($food != null): ?>
        <p class="lead">You want to eat a <?php echo $food; ?> for dinner.</p>
      <?php else: ?>
        <p>Enter a food.</p>
      <?php endif; ?>
    </div>
  </body>
</html>