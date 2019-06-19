<?php
// Initializes a global variable called _SESSION
session_start();
// _SESSION: An associative array containing session variables available to the current script
// _GET: client (person typing the info) sends information to the web server, method sends the 
// encoded user information appended to the page request.
if (isset($_GET['login']) && $_GET['login'] != NULL &&
	isset($_GET['passwd']) && $_GET['passwd'] != NULL &&
	($_GET['submit'] && $_GET['submit'] === "OK"))
{
	$_SESSION['login'] = $_GET['login'];
	$_SESSION['passwd'] = $_GET['passwd'];
}
?>
<html><body>
<!-- FORM: creates an option to send form-data(user-input) -->
<form method="GET" action="index.php">
	<fieldset>
		<legend>Fill-out Form</legend>
		Username: <input type="text" name="login" value="<?php echo $_SESSION['login'];?>" />
		<br />
		Password: <input type="password" name="passwd" value="<?php echo $_SESSION['passwd'];?>" />
		<input type="submit" name="submit" value="OK" />
	</fieldset>
</form>
</body></html>
