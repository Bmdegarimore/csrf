<?php
$user_name = "Guest";
session_start();
?>
<html>
<head>
	<title>Welcome</title>
<link rel="stylesheet" type="text/css" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
</head>
<body>
<div class="jumbotron">
<div class="row">
<div class="col-md-12 col-md-offset-5">
<?
if(($_SERVER['REQUEST_METHOD'] == 'POST') && (isset($_POST['username']))) {
	if (true) {
		$_SESSION['login'] = 1;
		$user_name = $_POST['username'];
		}
}
echo "<h2>Welcome $user_name</h2> </br>";

if (!isset($_SESSION['login'])) {
?>

	<form method="post" action='<?php echo $_SERVER['PHP_SELF']; ?>'>
 		Username:
	<input type="text" name="username"> <br />
 	<input class="btn btn-primary" type="submit" name="submit" value="Log In">
 	</form>
 	</div>
 	</div>
 	</div>
 	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
 </body>
</html>

<? }
else {
echo "<script type='text/javascript'>
           window.location = 'content.php'
      </script>";
}?>