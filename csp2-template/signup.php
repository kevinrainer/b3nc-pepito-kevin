<?php

function getTitle() {
	echo 'Sign-Up | Welcome to Beeer Web App';
}

include 'partials/head.php';

?>

</head>
<body>

	<?php

	include 'partials/main_navigation.php'

	?>

	<main class="wrapper">
		<h1>Login</h1>

	<form method="POST" action="registration.php">
		<label for="username">Username</label>
		<input type="text" name="username" id="username" placeholder="username">

		<label for="password">Password</label>
		<input type="password" name="password" id="password" placeholder="password">

		<label for="confirm-password">Confirm Password</label>
		<input type="password" name="password" id="confirm-password" placeholder="password">

		<input type="submit" name="submit" value="Log In">
	</form>

	</main> <!-- /.wrapper -->


	<?php 

	include 'partials/footer.php';

	?>


<?php

include 'partials/foot.php';

?>