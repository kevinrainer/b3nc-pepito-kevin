<?php

// session_start();

function getTitle() {
	echo 'Login | Welcome to Beeer Web App';
}

include 'partials/head.php';

?>

</head>
<body>
	
	<?php

	include 'partials/main_navigation.php'

	?>

	<main class="wrapper">

		<?php  

		if (isset($_SESSION['current_user'])) {
			echo "<p>" . $_SESSION['message'] . "</p>";
		} else 
			echo "<p>No user currently logged in</p>";

		?>

		<h1>Login</h1>

	<form method="POST" action="authenticate.php">
		<label for="username">Username</label>
		<input type="text" name="username" id="username" placeholder="username">

		<label for="password">Password</label>
		<input type="password" name="password" id="password" placeholder="password">

		<input type="submit" name="submit" value="Log In">
	</form>

	</main> <!-- /.wrapper -->


	<?php 

	include 'partials/footer.php';

	?>


<?php

include 'partials/foot.php';

?>