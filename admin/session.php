<?php

include '../conn.php';

session_start();

#Admin Restrictions
if (isset($_SESSION['email']) && isset($_SESSION['password'])) {
	$email 		= $_SESSION['email'];
	$password 	= md5($_SESSION['password']);
	$acc 		= mysqli_query($conn,"SELECT * FROM `admin` WHERE `email`='$email' and `password`='$password'");
	$acc 		= mysqli_fetch_object($acc);

} else {
	header('Location: ../');
}

if (isset($_GET['logout'])) {
	session_unset();
	session_destroy();
	?>
	<script>
		alert("You have been logged out.");
		location = '../';
	</script>
	<?php
}
?>