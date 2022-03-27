<?php include_once("connection.php");   ?>



<link rel="stylesheet" href="style.css" />

<div id="parallax-wrap" class="parallax-container parallax-home" data-parallax="scroll" data-position="top" 
        data-bleed="10" data-image-src="img/banner.jpg">

        <h1>Find food you love</h1>
        <p>Order food online for the fastest delivery</p>

        </div> 



        <div class="sections section-how-it-works">
<div class="container">
 <h2>How it works</h2>
 <p class="center">Get your favourite food in 4 simple steps</p>
 
 <div style="padding-top: 20px; class=" row"="">
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
 </div> <!--container-->
</div>
  
  
</div>
</div>





<script>document.querySelector(".banner__close").addEventListener("click", function () {
                this.closest(".banner").style.display = "none";
                });
        </script>

</body>
</html>