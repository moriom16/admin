<?php include_once("connection.php");   ?>
<!doctype html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Foodies||Online Food Delivery Project</title>

   
<style>
     .nav-link{
    color:black;
    }
     .banner-card{
          position:relative;
     }
     .banner-card img{
          max-width:100%;
          height:auto;
     }
     .banner-text{
          position: absolute;
          top:40%;
          color:#ffff;
          padding:20px;
          left:35%;
          text-align:center;
     }
     .banner-text h4{
          font-size:56px;
          font-weight:300;
          font-family:'Lato';
          color:white;
          margin-top:20px;
          margin-bottom:10px;
     }
</style>
</head>
  <body>
  
  
	<div id="wrapper">
	<header> 
	<div id="header"> 
		<h2> </h2>
		<p> 	</p>
	</div>
	</header>
	
	<nav class="navbar sticky-top navbar-light bg-light">
		<a class="navbar-brand" href="#">
		<img src="img/title.jpg" style= "width:30px; height:30px;" class="title_img" alt="">Foodies
		</a>
		<ul class="nav justify-content-end">
		<li class="nav-item">
		<a class="nav-link" href="home.htm">Home</a>
		</li>
		<li class="nav-item">
		<a class="nav-link" href="profile.php">Manage Profile</a>
		</li>
		<li class="nav-item">
		<a class="nav-link" href="signup.php">Login &amp; Signup</a>
		</li>
		</ul>
	</nav>


     <div class="banner-card">
          <img src="img/banner.jpg" alt="">
          <div class="banner-text">
               <h4>Find food you love </h4>
                    <p>Order food online for the fastest delivery</p>
          </div>
     
     </div>

        <div class="sections section-how-it-works">
          <div class="container" style="text-align:center;margin-top:25px;">
          <h2>How it works</h2>
          <p class="center">Get your favourite food in 4 simple steps</p>
          
          <div style="padding-top: 20px;"class="row">
          <div style="margin: 10px 0px 10px 0px;" class="col-md-3 col-sm-3 center ">

               <div class="box">
               <div class="steps step1-icon">
                     <img style="padding-top: 8px;" src="img/step1.png">
               </div>
                    <h3>Search</h3>
                    <p>Find all restaurants available near you.</p>
               </div>
               </div>

               <div style="margin: 10px 0px 10px 0px;" class="col-md-3 col-sm-3 center ">
               <div class="box">
               <div class="steps step2-icon">
                    <img style="padding-top: 8px;" src="img/step2.png">
               </div>
                    <h3>Choose</h3>
                    <p>Browse hundreds of menus to find the food you like</p>
               </div>
               </div>

               <div style="margin: 10px 0px 10px 0px;" class="col-md-3 col-sm-3  center ">
               <div class="box">
               <div class="steps step2-icon">
                    <img style="padding-top: 8px;" src="img/step3.png">
               </div>
                    <h3>Pay</h3>
                    <p>  It's quick, secure and easy</p>
               </div>
               </div>

               <div style="margin: 10px 0px 10px 0px;" class="col-md-3 col-sm-3  center ">
               <div class="box">
               <div class="steps step2-icon">
                    <img style="padding-top: 8px;" src="img/step4.png">
               </div>
                    <h3>Enjoy</h3>
                    <p>Food is prepared &amp; delivered to your door</p>
               </div>
               </div>

          </div>
          </div>
  
  
</div>
</div>

<div class="panel-footer">
        <p style="text-align:center; padding:5px;">&copy;2022</p>
    </div>

</body>
</html>