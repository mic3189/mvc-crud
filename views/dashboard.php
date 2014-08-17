<link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="../assets/css/styles.css">


<?php
	session_start();
	$email = $_SESSION['email'];
	//print_r($_SESSION);
?>
<div id="content-wrapper">
	<div id="header-wrapper">
		<div style="width: 500px;">
		<p>You logged as: <?php echo '<span style="color: #fff;"/>'.$email;?></p>
		</div>
		<a class="btn btn-large btn-primary pull-right dj-menu" href="../controller/session_destroy.php">SIGNOUT</a>
	</div>
	<div id="main-wrapper">
		test
	</div>
</div>