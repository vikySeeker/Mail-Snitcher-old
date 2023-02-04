<?php
if (isset($_SESSION['user_token'])) {
    header("Location: success.php");
    die();
}
?>
<h1>Welcome to Mail Snitcher</h1>
<p>The mail notifier that tells you about new incoming email that you don't wanna miss!</p><br>
<a href="/login"><strong>Continue with Google</strong></a>