<?php
$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "paymentgateway";
$conn= mysqli_connect($dbServername,$dbUsername,$dbPassword,$dbName);
$sql = " SELECT * FROM paymentsdone;";
$result = mysqli_query($conn,$sql);
$total=0;
      $resultCheck=mysqli_num_rows($result);
      if($resultCheck > 0)
      {
        while($row=mysqli_fetch_assoc($result))
        {
          $total=$total+$row['amount'];
          
        }
      }
    
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>GIVE A HAND</title>
    <!--  Bootstrap -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <!-- font family for header  -->
    <link href="https://fonts.googleapis.com/css2?family=Ramabhadra&display=swap" rel="stylesheet">
 
    <!-- font awesome -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


    <!-- External Style Sheet -->
    <link rel="stylesheet" type="text/css" href="donation.css">
    <style type="text/css">
      body
      {margin: 0;
       padding: 0;
      }

    </style>
    <script type="text/javascript">
      function updatedom() {
        document.getElementById("totaldonation").innerHTML += <?php echo $total;?>;
        document.getElementById("totalvolunteer").innerHTML += <?php echo $resultCheck;?>;
        document.getElementById("totalneeded").innerHTML += <?php echo 50000000-$total;?>;

      }
      
    </script>
  </head>
  <body onload="updatedom()">


 <div class="bg text-center container-fluid">
  <div class="container-fluid maindiv">

  <h1><span style="">TOGETHER we can make a </span><span style="color: orange;font-size: 50px;"></br>DIFFERENCE</span></h1>
  <h3>Be a helping hand today</h3>
  <p>We stand with the refugees,Bring to life agin those who are spititually dead.</br></p>
   <button class="btn btn-default" style="margin: 1%;">
    <a href='form.html' style="color:black;text-decoration: none;">DONATE NOW</a></button>
  

 </div>

</div>
<div class="container-fluid text-center jumbotron">
  <div class="row">
    <div class="col-sm-3 donation " id="totaldonation" style="background: #E7A626;font-size:50px;">
       <p style="color: black;font-size:20px;"><span class="fa fa-hand-holding-usd"></br>TOTAL DONATION:</p>
    </div>
    <div class="col-sm-3 border donation" id="totalvolunteer" style="background: #F31B45;font-size:50px;">
      <p style="color: black;font-size:20px;"><span class="fas fa-refresh"></br>TOTAL VOLUNTEERS:</p>
    </div>
    <div class="col-sm-3 border donation" id="totalneeded" style="background: #E6481E;font-size:50px;">
      <p style="color: black;font-size:17px;"><span class="fa fa-refresh"></br>HOW FAR ARE WE FROM THE REQUIREMENT:</p>
    </div>
  </div>
</div>

<footer><p class="pull-left">
         Copyright &copy; 2020 Helping Hands</p>
        <p class="pull-right">
        
        <a href="#" target="_blank" class="fa fa-instagram" ></a>
        <a href="#" target="_blank" class="fa fa-linkedin"></a>
        <a href="#" target="_blank" class="fa fa-github"></a>
      </p>
</footer>



  </body>
  </html>