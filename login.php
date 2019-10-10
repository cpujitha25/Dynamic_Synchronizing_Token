<?php

session_start();

require_once 'token.php';

const username = 'user';
const password = 'user';


if (isset($_POST['username']) && isset($_POST['password']))//check if user given valid password and user name
{
  
  if ($_POST['username'] === username && $_POST['password'] === password) {
    
	$_SESSION['username'] = $_POST['username'];
    setcookie("id", session_id());
	Token::generate_token(session_id());//genarate token using session id
    header('Location: ./moneyTransfer.php');//go to the monytransfer page
  }
  else {
    echo "<script>alert('Check your credentials');</script>";
  }
}
?>

<!doctype html>
<html lang="en">
  <head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="./styles.css">

    <title>Money Transfer</title>
  </head>
  <body>
	<div class="container custom-padding-top-5">
	<strong>Login</strong>
	<hr>
	<form method="post">
		Username:<br><input name="username"><br>
		Password:<br><input type="password" name="password"><br>
		<br>
		<input type="submit" value="Login">
	</form>
	</div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>