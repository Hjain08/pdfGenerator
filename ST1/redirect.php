 <!DOCTYPE html>
 <html>
 <head>
 	<title>
 		Suprise Test 1
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

 	<div class="container">

 		<div class="col-lg-12">

 				<h5><a href="main.php">Home</a></h5>
 			
 				<h1 class="text-warning text-center">Print Invoice</h1>
 				<br/>

 				<table class="table table-striped table-hover table-border">
 					<tr class="bg-dark text-white text-center">
 						
 						<th> ID </th>
 						<th> USERNAME </th>
 						<th> CONTACT NUMBER </th>
 						<th> ADDRESS </th>
 						<th> QUERY </th>
 						<th> SUBMISSION DETAILS </th>
 						<!--<th> DELETE </th>
 						<th> UPDATE </th>--> 
 						
 					</tr>

 					<?php 		

						include 'conn.php';

						$q = "SELECT * FROM st01 WHERE id=(SELECT max(id) FROM st01)";

						$query = mysqli_query($con,$q)or die( mysqli_error($con));
	

						while($res = mysqli_fetch_array($query)){


					 ?>

 					<tr class="text-center">

 						<td> <?php echo $res['id']; ?></td>
 						<td> <?php echo $res['uname']; ?> </td>
 						<td> <?php echo $res['num']; ?> </td>
 						<td> <?php echo $res['addr']; ?></td>
 						<td> <?php echo $res['quer']; ?></td>
 						<td> <?php echo $res['submission']; ?></td>
 						<!--<td> <button class="btn-danger btn"><a href="delete.php?id=<?php echo $res['id']; ?>" class="text-white">Delete</a></button></td>
 						<td><button class="btn-primary btn"><a href="update.php?id=<?php echo $res['id']; ?>" class="text-white">Update</a></button> </td>-->


 					</tr>

 					<?php  
 				}?>

 				</table>

 				<div class="text-center">
 					<a href="invoice.php" class="btn btn-primary">Print</a>
 				</div>

 		</div>
 		

 	</div>
 
 	
 </body>
 </html>
