<?php 
	
	//session_start();
	
	include 'conn.php';

	$Uerr = $Nerr = $Aerr = $Qerr = "";
	//$uname = $pswd ="";

	function test_input($data){
			$data = trim($data);
			$data = stripslashes($data);
			$data = htmlspecialchars($data);
			return $data;

		}

	if(isset($_POST['done'])){

		$uname = $_POST['uname'];
		$num = $_POST['num'];
		$addr = $_POST['addr'];
		$quer = $_POST['quer'];

		//$strict = "SET sql_mode = ''";
  		//mysqli_query($con, $strict);

		$q = "INSERT INTO `st01`(`uname`, `num`, `addr`, `quer`) VALUES ('$uname','$num','$addr','$quer')";



		$query = mysqli_query($con, $q);


		if(empty($_POST['uname'])){
			$Uerr = "Name is required!";
		} else{
			$uname = test_input($_POST['uname']);

			if(!preg_match("/^[a-zA-Z-' ]*$/",$uname)){
				$Uerr = "Only letters and white space allowed";
			}
		}


		if(empty($_POST['num'])){
			$Nerr = "Contact number is required!";
		} else{
			$num = test_input($_POST['num']);

			if(!preg_match("/^[+]?[1-9][0-9]{9,14}$/", $num)){
				$Nerr = "Enter a Valid Contact Number!";
			}
		}


		if(empty($_POST['address'])){
			$Aerr = "Address is required!";
		} else{
			$addr = test_input($_POST['addr']);

			if(!preg_match("/^[a-zA-Z]+\ +[0-9]+$/",$addr)){
				$Aerr = "Enter valid address!";
			}
		}
		

		


	}

	
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>
 		CRUD Operations Demo
 	</title>
 	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

 <link rel="stylesheet" type="text/css" href="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/css/jquery.dataTables.css">
   <script type="text/javascript" charset="utf8" src="https://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/jquery.dataTables.min.js"></script>
 </head>
 <body>
	 <form action="redirect.php" method="post">

	 	<h5><a href="main.php">Home</a></h5>

	 
	 	<div class="col-lg-6 m-auto">

	 		<form method='post'>

	 			<br/>
	 			<div class="card">
	 				
	 				<div class="card-header bg-dark">
	 					
	 					<h1 class="text-white text-center">Insert Operation</h1>
	 				</div>


	 				<label>User Name:</label>

	 				<input type="text" name="uname">
	 				<span class="error">* <?php echo $Uerr;?></span>
  					 <br/>


  					 <label>Contact:</label>

	 				<input type="text" name="num">
	 				<span class="error">* <?php echo $Nerr;?></span>
  					 <br/>

  					<label>Address:</label>

	 				<input type="text" name="addr">
	 				<span class="error">* <?php echo $Aerr;?></span>
  					 <br/>

  					 <label>Query:</label>

	 				<input type="text" name="quer">
	 				<span class="error">* <?php echo $Qerr;?></span>
  					 <br/>



	 				<button class="btn btn-success" type="submit" name="done">Submit</button>
	 				<br/>
	 				
	 				<button class="btn btn-success" type="button" name="done"><a href="main.php">Cancel</a></button>
	 				<br/>

	 				

	 			</div>
	 			
	 		</form>
	 	</div>
	</form>
 </body>
</html>