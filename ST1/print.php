<?php
include 'conn.php';
?>
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
  <div class="row">
    <div class="col-md-12">
      <div>
        <br>
        <h1 style="color:lightblue;">Invoice</h1> 
        <img src="logo.png" alt="Oretes" height="40" width="150" align="right">
        <br>
        <br>
        <hr>

      </div>
      
      <table class="table table-bordered print">
        <thead>
          <tr>
            <th> ID </th>
            <th> USERNAME </th>
            <th> CONTACT NUMBER </th>
            <th> ADDRESS </th>
            <th> QUERY </th>
            <th> SUBMISSION DETAILS </th>
          </tr>
        </thead>
        <tbody>
          <?php     

            include 'conn.php';

            $q = "SELECT * FROM st01 WHERE id=(SELECT max(id) FROM st01);";

            $query = mysqli_query($con,$q)or die( mysqli_error($con));;
  

            while($res = mysqli_fetch_array($query)){


           ?>

          <tr class="text-center">

            <td> <?php echo $res['id']; ?></td>
            <td> <?php echo $res['uname']; ?> </td>
            <td> <?php echo $res['num']; ?> </td>
            <td> <?php echo $res['addr']; ?></td>
            <td> <?php echo $res['quer']; ?></td>
            <td> <?php echo $res['submission']; ?></td>
  
          </tr>

          <?php  
        }?>
        </tbody>
      </table>
      <div>
        <br>
        <hr>
        <p align="center">For any queries please feel free to contact <b style="color:blue;">helpme@oretes.com</b></p>
      </div>

      <div class="text-center">
        <button onclick="window.print();" class="btn btn-primary" id="print-btn">Print</button>
      </div>
    </div>
  </div>
</div>
</body>
</html>