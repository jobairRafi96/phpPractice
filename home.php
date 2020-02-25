<?php
 	session_start();
//if session was destroy in log out page we need to do login again.
 	if (!isset($_SESSION['uname'])) {
 		header("location: login.php");
 	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Home page</title>
</head>
<body>
	<h1 align="center">HOME PAGE</h1>

	<!-- we need to redirect on logout page to block url entries -->
	<h3 align="center"><a  href="logout.php">Log Out</a></h3>

</body>
</html>