<?php

require "vendor/autoload.php";

// 1. What does this function session_start() do to the application?
// _____________________________________________________________________

session_start();
session_destroy();
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Register</title>
</head>
<body>

	<h1>Analogy Exam Registration</h1>
	<h3>Kindly register your basic information before starting the exam.</h3>

	<form method="POST" action="register.php">
		Enter your full name:<br />
		<input type="text" name="fullname" placeholder="Full Name" required /><br />
		Email Address:<br />
		<input size="30" type ="email" name ="email" /><br />
		Birthdate:<br />
		<input size="30" type ="date" name ="birthdate" /><br />
		Gender:<br />
		<input type="radio" name="gender" value="male" />Male<br />
		<input type="radio" name="gender" value="femail" />Female<br />
		<input type="submit">
	</form>

</body>
</html>

<!-- DEBUG MODE -->
<pre>
<?php
var_dump($_SESSION);
?>
</pre>