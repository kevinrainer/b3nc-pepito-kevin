<header>
	<div class="navbar navbar-inverse">
		<div class="container-fluid">
			<div class="navbar-header">
				<a href="#" class="navbar-brand">
					Beeer Web App
				</a>
			</div>
			<ul class="nav navbar-nav navbar-right">
				<li><a href="home.php">Home</a></li>
				<li><a href="about.php">About</a></li>
				<li><a href="careers.php">Careers</a></li>
				<li><a href="catalog.php">Catalog</a></li>
				<li><a href="contact.php">Contact</a></li>
				<?php

				if (isset($_SESSION['current_user'])) {
					echo '<li><a href="login.php">Logout</a></li>';
				} else
					echo '<li><a href="login.php">Login</a></li>';
				
				?>
				<li><a href="signup.php">Sign-Up</a></li>
			</ul>
		</div>
	</div>
</header>
