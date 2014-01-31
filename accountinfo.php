<?php
	include_once "db.php";
	session_start();
	$email = $_SESSION['email'];
	$pid1 = $_SESSION['pid1'];
	$p1 = $_SESSION['p1'];
	$p2 = $_SESSION['p2'];
	$p3 = $_SESSION['p3'];
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../docs-assets/ico/favicon.png">

    <title>Sign in verification : Step 1 of 2</title>
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/sticky-footer.css" rel="stylesheet">
  </head>

  <body>
    <div id="wrap">
      <div class="container">
	  <p class="navbar-text navbar-right">Hi, <a class="navbar-link"><?php echo $email; ?></a> - <a class="navbar-link" href="logout.php">Log out</a></p>
        <div class="page-header">
		<?php
			if(isset($p1) && isset($p3) && isset($p2) && isset($pid1) && isset($email)) {
		?>
          <h1>Your account details</h1>
        </div>
        
		<?php
			$q = mysql_fetch_array(mysql_query("SELECT * FROM accountinfo WHERE user_id = (SELECT id FROM users WHERE email = '$email') LIMIT 1"));
		?>
        <table class="table-condensed" width="600px">
		<tr class="info">
			<th>Account #</th>
			<th>Balance</th>
			<th>Date</th>
		</tr>
		<tr class="info">
			<td><?php echo $q['accno']; ?></td>
			<td><?php echo $q['balance']; ?></td>
			<td><?php echo date("d-m-Y"); ?></td>
		</tr>
		</table>
<?php } ?>
		
		
      </div>
    </div>

    <div id="footer">
      <div class="container">
        <p class="text-muted">&copy; 2014 CheckPass</p>
      </div>
    </div>
  </body>
</html>