<?php
session_start();
if(isset($_SESSION['login'])){
?>
<html>
<head>
	<title>Content</title>
	<link rel="stylesheet" type="text/css" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
</head>
<body>
<div class="jumbotron">
<div class="row">
<div class="col-md-12 col-md-offset-4">
<a href="logout.php">Time to Leave</a><br/><br>
<?
echo "You are logged in with sid: <br/>".session_id(). "<br /><br>";
?>
<span>Please Input Names to the Secret Business Proposal Plan:</span><br><br>
<form action="content.php" method="GET">
<input type=text name=write />
<input type=submit value='write this'/>
</form>
<?
if(isset($_GET['write'])){
	$myFile="text.txt";
	$fh = fopen($myFile, 'a') or die("Can't do that!");

	fwrite($fh, $_GET['write']. "\n");
	echo $_GET['write']." has been written down";
	}
}
else {
	echo "You are not logged in!<br />";
	echo "<a href=index.php>Login</a><br />";
}
?>
</div>
</div>
</div>
 	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
 </body>
</html>
