<?php 
$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "paymentgateway";
$conn= mysqli_connect($dbServername,$dbUsername,$dbPassword,$dbName);?>
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
  </head>
  <body>
    <div class="container exact-center">
      <div class="row justify-content-center">
        <div class="col">
      <h1 class="exact-center">Thankyou for being a helping hand! </h1>
      <?php
      include 'instamojo/Instamojo.php';
      $api = new Instamojo\Instamojo('test_d7d3a2c861ba314d1eec10e5c1c', 'test_7e2498308598144acdcd3312447','https://test.instamojo.com/api/1.1/');
      $payid=$_GET['payment_request_id'];


      try{
        $response = $api->paymentRequestStatus($payid);
       
        //echo "<h4> Payment ID: ".$response['payments'][0]['payment_id']."</h4>";
   ?>
      <h2> Payment Details : </h2>
      <table class="table table-bordered">
        <tr> 
          <th>Payment ID :</th>
          <td><?= $response['payments'][0]['payment_id']; ?></td>
        </tr>
         <tr> 
          <th>Payee Name :</th>
          <td><?= $response['payments'][0]['buyer_name']; ?></td>
        </tr>
         <tr> 
          <th>Payment Email :</th>
          <td><?= $response['payments'][0]['buyer_email']; ?></td>
        </tr>
        <tr> 
          <th>Amount :</th>
          <td><?= $response['payments'][0]['amount']; ?></td>
          <?php $amountpayed=$response['payments'][0]['amount'];
                $name=$response['payments'][0]['buyer_name'];
                $email=$response['payments'][0]['buyer_email'];
                $sql = "INSERT INTO paymentsdone (name, amount, email)
                VALUES ('$name', '$amountpayed', '$email')";

                if (mysqli_query($conn, $sql)) 
                {
                  
                 
                } 
          ?>
          
     
        </tr>
      </table>
      
      <?php
    }
    
      catch(Exception $e)
       { print("Error:".$e->getMessage());}

      ?>
      <button class="btn btn-default" style="margin: 1%;">
    <a href='index.php' style="color:black;text-decoration: none;">HOME</a></button>

    </div>
  </div>
</div>