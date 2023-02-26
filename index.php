<?php
require_once __DIR__.'/__configs/google/config.php';
if (isset($_SESSION['user_token'])) {
    header("Location: app");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="/styles/">

</head>

<body>

	<div class="container">
		<div class="loginpage"></div>
		<div class="content">
			<h1> Mail Snitcher</h1>
			<h4>Welcome To Mail Snitcher...</h4>
			<div class="btn"><a href="/login/google/" class="google">
					<button><img src="/styles/images/icons8-google-48.png"><span>Sing In With Google</span>
					</button>
				</a>

				<a href="#" class="yahoo">
					<button><img src="/styles/images/icons8-yahoo-48.png"><span>Sing In With Yahoo</span>
					</button>
				</a>

				<a href="#" class="microsoft">
					<button><img src="/styles/images/icons8-microsoft-48.png"><span>Sing In With Microsoft</span>
					</button>
				</a>

			</div>

		</div>
	</div>

</body>

</html>