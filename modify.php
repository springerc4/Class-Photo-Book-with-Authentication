<?php
    session_start();
    require_once('auth.php');
?>
<!-- Display "user modified" message to the user -->
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <title>User Modified</title>
  </head>
<?php
    if ($_SESSION['logged'] == "false") {
?>
  <body>
    <div class="alert alert-danger" role="alert">
      <h4 class="alert-heading">I'm Sorry</h4>
      <p>In order to modify a user, you have to be signed in to an account.</p>
      <hr>
      <p class="mb-0">
        <a href="signup.php"><button type="button" class="btn btn-primary">Sign Up</button></a>
        <a href="signin.php"><button type="button" class="btn btn-primary">Sign In</button></a>
        <a href="index.php"><button type="button" class="btn btn-primary">Home</button></a>
      </p>
    </div>
  </body>
<?php
    }
    else {
?>
  <body>
    <div class="card" style="width: 18rem; margin-left: 40%; margin-top: 5%;">
        <img src="https://st2.depositphotos.com/5383370/10880/v/450/depositphotos_108806350-stock-illustration-happy-businessman-winks-and-hand.jpg" class="card-img-top" alt="Man approves with thumbs up">
        <div class="card-body">
            <h5 class="card-title">Success!</h5>
            <p class="card-text">A selected user has been successfully modified. Happy coding!</p>
            <a href="index.php" class="btn btn-primary">Return Home</a>
        </div>
    </div> 

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
  </body>
</html>
<?php
      require_once('json_util.php');
      $new_array = convertToPhp('class.json');
      $index = $_GET['index'];
      $new_array[$index]["first name"] = $_GET['firstname'];
      $new_array[$index]["last name"] = $_GET['lastname'];
      convertToJson($new_array, 'class.json');
    }
