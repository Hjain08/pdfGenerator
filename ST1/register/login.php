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
	 <form action="main.php" method="post">

	 
	 	<div class="col-lg-6 m-auto">

	 		<form method='post'>

	 			<br/>
	 			<div class="card">
	 				
	 				<div class="card-header bg-dark">
	 					
	 					<h1 class="text-white text-center">Login</h1>
	 				</div>


	 				<label>User Name:</label>

	 				<input type="text" name="aname">
	 				
  					 <br/>

	 				<label>Password:</label>

	 				<input type="password" name="pwd"class="form-control"> <br/>



	 				<button class="btn btn-success" type="submit" name="done">Submit</button>
	 				<br/>
	 				
	 				<button class="btn btn-success" type="button" name="done"><a href="login.php">Cancel</a></button>
	 				<br/>

	 				

	 			</div>
	 			
	 		</form>
	 	</div>
	</form>
 </body>
</html>

