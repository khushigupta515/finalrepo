<?php
 $dbServername = "localhost";
$dbUsername = "id14887458_grocerybasket";
$dbPassword = "Momdadform7@";
$dbName = "id14887458_helpinghands";
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
    <!--<meta name="viewport" content="width=device-width, initial-scale=1">-->
    <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">-->
    <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>-->
    <!--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>-->
    <!-- font family for header  -->
    <link href="https://fonts.googleapis.com/css2?family=Ramabhadra&display=swap" rel="stylesheet">
 
    <!-- font awesome -->
    <!--<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">-->

    <!-- External Style Sheet -->
    <link rel="stylesheet" type="text/css" href="donation.css">
    <style type="text/css">
      body
      {margin: 0;
       padding: 0;
      }

    </style>
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/font-awesome/5.0.7/css/font-awesome.min.css"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous" />
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap"
    type="text/javascript"></script>
    <link href="https://fonts.googleapis.com/css2?family=Ramabhadra&display=swap" rel="stylesheet">
    <script type="text/javascript">
      function updatedom() {
        document.getElementById("totaldonation").innerHTML += <?php echo $total;?>;
        document.getElementById("totalvolunteer").innerHTML += <?php echo $resultCheck;?>;
        document.getElementById("totalneeded").innerHTML += <?php echo 50000000-$total;?>;

      }
      
</script>
 </head>
  <body onload="updatedom()">

    <section id="nav-bar">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand text-white" href="#"><i class="fas fa-handshake fa-small"></i><strong>  Give A Hand</strong></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                  <a class="nav-link ml-1 text-white" href="index.php">HOME<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item ml-1">
                  <a class="nav-link text-white " href="#services">ABOUT</a>
                </li>
                <li class="nav-item ml-1">
                  <a class="nav-link text-white" href="form.html">DONATE</a>
                </li>
              </ul>
            </div>
          </nav>
    </section>
    
     <section id="banner">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <p class="promo-title">TOGETHER WE CAN MAKE A DIFFERENCE</p>
                    <p class="info">Be a helping hand today.We stand with the refugees,Bring to life agin those who are spititually dead.</p>
                    <button class="btn btn-secondary btn-xlarge" style="margin: 1%;">
                    <a href='form.html' class="text-white">DONATE NOW</a></button>
                </div>
                <div class="col-md-6 text-center">
                    <img src="saving.svg" alt="ambulance" class="img-fluid">
                </div>
            </div>
        </div>
    </section>
    <img src="wave.svg" class="img-fluid">
    <section id="services">
        <div class="container text-center">
           <h1 class="title">WHY SHOULD YOU DONATE?</h1> 
            <div class="row">
                <div class="col-md-4">
                    <img src="saving.svg" class="img-fluid" id="img1">
                    <h4 class="text-center">SECURE MODE OF PAYMENT</h4>
                    <p class="loc">This is a very secure mode of payment that will ensure that money goes into the right hands and help the needy.
Donate now through a completely secured, easy mode of payment so that the money reaches the person.</p>
                    </p>
                </div>
                <div class="col-md-4">
                    <img src="ambulance.jpg" class="img-fluid" id="img2">
                    <h4 class="text-center">HELP THE NEEDY</h4>
                    <p class="loc" >Every penny counts just like every drop in the ocean. 
Donate and be a helping hand today! 
All donations will directly be utilised towards nuclear disaster management and sending emergency kits, food and basic emenities to those in need ! </p>
                </div>
                <div class="col-md-4">
                    <img src="gifts.svg" class="img-fluid" id="img3">
                    <h4 class="text-center">WE NEED YOU</h4>
                    <p class="loc">Help us in helping them and even a single rupee of your donation will help us achieve our goal of helping others in need !
In these difficult times, let's join hands together and stand with those going through difficult times !</p>
                </div>
            </div>
        </div>
    </section>
 <section class="stat" id="stats">
        <div class="container text-center my-5 text-dark">
            <h1 class="title text-center">STATISTICS</h1>
            <div class="row">
                <div class="col-md-4">
                    <div class="stat-items" id="totaldonation">
                        <img src="moneytransfer.svg" class="img-fluid">
                        <h2><span class="counter text-center">6789</span><span>+</span></h2>
                        <h3 class="text-dark">Total Donations</h3>
                    </div>
                </div>
                <!--<div class="col-md-3 ">-->
                <!--    <div class="stat-items">-->
                <!--        <img src="img/happy.svg" class="img-fluid">-->
                <!--        <h2><span class="counter text-center">7789</span><span>+</span></h2>-->
                <!--        <h3  class="text-dark">How far are we from requirement?</h3>-->
                <!--    </div>-->
                <!--</div>-->
                <div class="col-md-4 ">
                    <div class="stat-items" id="totalvolunteer">
                        <img src="people.svg" class="img-fluid">
                        <h2><span class="counter text-center">570</span><span>+</span></h2>
                        <h3 class="text-dark">Total Volunteers</h3>
                    </div>
                </div>
                <div class="col-md-4 ">
                    <div class="stat-items" id="totalneeded">
                        <img src="wallet.svg" class="img-fluid">
                        <br><br>
                        <h2 class="mr-2"><span class="counter text-center">12</span><span>+</span></h2>
                        <h3  class="text-dark">Total Needed</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
<img src="wave-3.svg">
    <section id="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4 footer-info">
                  <img src="address.svg" class="img-fluid" style="width:50%;">
                   <p>Contact Us</p>
                   <p><i class="fas fa-home"></i>: A-111 Ajmera Infinity Apartments opp Niligirs near Mc.Donalds.Bangalore,Karnataka.</p>
                   <p><i class="fas fa-inbox"></i>: xyz@gmail.com</p>
                   <p><i class="fas fa-phone"></i> : +91 900090008/+91 900090409</p>
                </div>
                <div class="col-md-4 footer-info">
                    <img src="newsletter.svg" class="img-fluid" style="width:50%;">
                     <p class="my-2">Subscribe Newsletter</p>
                     <input type="email" placeholder="Your Email" style="width:100%;">
                     <input value="Subscribe" class="btn-primary my-2 text-white">
                </div>
                <div class="col-md-4 footer-info">
                    <img src="copyright.svg" class="img-fluid" style="width:50%;">
                     <p class="my-2"> &#169 Copyright 2020 Give A Hand</p>
                </div>
            </div>
        </div>
    </section>
   <script src="jquery.waypoints.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js" integrity="sha512-d8F1J2kyiRowBB/8/pAWsqUl0wSEOkG5KATkVV4slfblq9VRQ6MyDZVxWl2tWd+mPhuCbpTB4M7uU/x9FlgQ9Q==" crossorigin="anonymous"></script>
    <script>
    $(document).ready(function()
    {
        $('.counter').counterUp({
        delay: 10,
        time: 2000
    });
    });
    </script>
<!--<footer><p class="pull-left">-->
<!--         Copyright &copy; 2020 Helping Hands</p>-->
<!--        <p class="pull-right">-->
        
<!--        <a href="#" target="_blank" class="fa fa-instagram" ></a>-->
<!--        <a href="#" target="_blank" class="fa fa-linkedin"></a>-->
<!--        <a href="#" target="_blank" class="fa fa-github"></a>-->
<!--      </p>-->
<!--</footer>-->



  </body>
  </html>
