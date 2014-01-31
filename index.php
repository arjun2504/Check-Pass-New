<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Login</title>
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">
    <link href="css/signin.css" rel="stylesheet">
  </head>

  <body>
    <div class="container"> 
<h1>Welcome to Personal Banking</h1>
</div>
<div class="ribbon1"></div><br>
<div class="container">

      <form class="form-inline" role="form" action="validate1.php" method="post">
  <div class="form-group">
    <label class="sr-only" for="exampleInputEmail2">Email address</label>
    <input type="email" class="form-control" name="email" id="exampleInputEmail2" placeholder="Enter User ID" required autofocus>
  </div>
  <button type="submit" class="btn btn-default">Sign in</button>
		<?php
		if(@$_GET['error'] == 1) {
			echo "<center>Invalid email</center>";
		}
	  ?>
      </form>

    </div>
  </body>
</html>
