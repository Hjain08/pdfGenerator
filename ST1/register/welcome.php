<?php 
	
	$aname = "admin";
	$pwd = "1234";

	session_start();

	if(isset($_SESSION['aname'])){ 

		/*echo "<h2> Welcome " .$_SESSION['aname']."</h2>";

		//echo "<a href='product.php'>Product</a> <br />";

		//echo "</ br><a href='logout.php'><input type = button value=logout name= logout></a>";
	}
	else{*/

		if($_POST['aname'] === $aname && $_POST['pwd'] === $pwd){

			$_SESSION['aname'] = $aname;

			echo "<script>Location.href='main.php'</script>";
		}
		else{

			echo "<script> alert('incorrect username or password!') </script>";

			echo "<script>location.href='login.php'</script>";

		}			
	}
	
?>
