<?php 

	session_start();

	session_unset();

	//header('Cache-Control: no-cache, must-revalidate');
	//header('Expires: Sat, 26 Jul 1997 05:00:00 GMT');

	if(isset($_SESSION['aname'])){

		session_destroy();

		echo "<script>location.href='login.php'</script>";
	}else{


		echo "<script>location.href='login.php'</script>";
	}

?>