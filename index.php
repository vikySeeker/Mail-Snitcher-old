<?php
require_once 'config.php';
if (isset($_SESSION['user_token'])) {
    header("Location: success.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Mail Snitcher</title>
</head>

<body>
	<h1>Welcome to Mail Snitcher</h1>
	<p>The mail notifier that tells you about new incoming email that you don't wanna miss!</p><br>
	<p>Get notified about your emails straight through your whatsapp and telegram messages.</p><br>
	<p>See, handling multiple email accounts is a tedious task! and also with that terrible email notifcations the might
		be
		times when you missed your important email due to poor notifications.</p><br>
	<p>with <strong>Mail Snitcher</strong> responding to your important emails made more faster, our service gives you
		notification as messages on the messaging platforms that you use often eg. whatsapp and telegram.</p><br>
	<a href="/login"><strong>Continue with Google</strong></a>
</body>

</html>