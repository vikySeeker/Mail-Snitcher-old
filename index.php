<?php
require_once __DIR__.'/__configs/google/config.php';
if (isset($_SESSION['user_token'])) {
    header("Location: http://localhost:8080/app/");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Mail Snitcher</title>
	<link rel="stylesheet" href="/styles/style.css">
</head>

<body>
	<img class="wave" src="/styles/images/SIDE WAVE.png" alt="">
	<div class="container">
		<div class="image">
			<img src="/styles/images/undraw_newsletter_re_wrob.svg" alt="">
		</div>

		<div class="login-container">

			<img class="avatar" src="/styles/images/undraw_female_avatar_efig.svg" alt="">
			<h2 class="intro">SIGN IN</h2>
			<p class="note">Welcome To Mail Snitcher</p>
			<span class="line"></span>
			<div class="btn">
				<button class="icon" onclick="google()"><img src="/styles/images/icons8-google-48.png" alt="">Sign In
					With Google</button>
				<button class="icon" onclick="microsoft()"><img src="/styles/images/icons8-microsoft-48.png" alt="">Sign
					In With Microsoft</button>
				<button class="icon" onclick="yahoo()"><img src="/styles/images/icons8-yahoo-48.png" alt="">Sign In With
					yahoo</button>
			</div>

		</div>

	</div>
	<script src="/styles/app.js"></script>
</body>

</html>