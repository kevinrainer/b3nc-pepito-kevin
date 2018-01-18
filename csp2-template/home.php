<?php

session_start();

function getTitle() {
	echo 'Home | Welcome to Beeer Web App';
}

include 'partials/head.php';

?>

</head>
<body>

	<?php

	include 'partials/main_navigation.php'

	?>

	<main class="wrapper">

		<p><?php echo $_SESSION['message']; ?></p>

		<h1>Home</h1>

		<h3>Welcome <?php echo $_SESSION['current_user']; ?></h3>

	</main> <!-- /.wrapper -->


	<?php 

	include 'partials/footer.php';

	?>


	<?php

	include 'partials/foot.php';

	?>