<?php include_once("connection.php");   ?>
<?php include('header.php'); ?>
	<div class="pane panel-default container">
        <div class="top-menu-wrapper top-index">
    <div class="container border">
        <div class="col-md-3 col-xs-3 border col-a">
            <a href="index.php">
            <img src="img/food.jpg" class="logo">
            </a>
        </div>>

        <div class="col-xs-1 menu-nav-mobile border relative">
            <a href="#"><i class="ion-android-menu"></i></a>
        </div>


        <div class="col-md-9 border col-b">
            <ul id="menu">
            <li><a href="index.php">Home</a></li>
            <li><a href="#">Login &amp; Signup</a></li>
            </ul> 
        <div class="clear"></div>    
  </div>
    </div>

    </div>
        


    <div class="panel-body">
       

    <div id="parallax-wrap" class="parallax-container parallax-home" data-parallax="scroll" data-position="top" data-bleed="10"
    
        data-image-src="img/food.jpg">

    <div class="search-wraps single-search">

    <h1>Find food you love</h1>
    <p>Order food online for the fastest delivery</p>
        
    <form method="GET" class="forms-search" id="forms-search" action="/searcharea">
    <div class="search-input-wraps rounded30">
     <div class="row">
        <div class=" border col-sm-11 col-xs-10">
        
             <div class="mapbox_s_goecoder" id="mapbox_s_goecoder">
                 <div class="mapboxgl-ctrl-geocoder mapboxgl-ctrl">
                     <span class="geocoder-icon geocoder-icon-search"></span>
                     <input type="text" placeholder="Street Address,City,State" name="s" id="s" autocomplete="off">
                     <ul class="suggestions" style="display: none;"> </ul>
                     <div class="geocoder-pin-right">
                         <button class="geocoder-icon geocoder-icon-close" aria-label="Clear"></button>
                         <span class="geocoder-icon geocoder-icon-loading"></span>
                        </div>
                    </div>
                </div>
                
        </div>        
        <div class=" relative border col-sm-1 col-xs-2">
          <button type="submit"><i class="ion-ios-search"></i></button>         
        </div>
     </div>
  </div> 
  </form>
  
</div> 

</div>
       



<div class="sections section-how-it-works">
<div class="container">
 <h2>How it works</h2>
 <p class="center">Get your favourite food in 4 simple steps</p>
 
 <div style="padding-top: 20px; class=" >
   <div style="margin: 10px 0px 10px 0px;" class="col-md-3 col-sm-3 center">
       <div class="khani-box">
      <div class="steps step1-icon">
        <img style="padding-top: 8px;" src="/assets/images/step1.png">
      </div>
      <h3>Search</h3>
      <p>Find all restaurants available near you</p>
   </div>
   </div>
   <div style="margin: 10px 0px 10px 0px;" class="col-md-3 col-sm-3 center ">
       <div class="khani-box">
      <div class="steps step2-icon">
         <img style="padding-top: 8px;" src="/assets/images/step2.png">
      </div>
      <h3>Choose</h3>
      <p>Browse hundreds of menus to find the food you like</p>
   </div>
   </div>
   <div style="margin: 10px 0px 10px 0px;" class="col-md-3 col-sm-3  center ">
       <div class="khani-box">
      <div class="steps step2-icon">
        <img style="padding-top: 8px;" src="/assets/images/step3.png">
      </div>
      <h3>Pay</h3>
      <p>It's quick, secure and easy</p>
   </div>
   </div>
   <div style="margin: 10px 0px 10px 0px;" class="col-md-3 col-sm-3  center ">
       <div class="khani-box">
     <div class="steps step2-icon">
       <img style="padding-top: 8px;" src="/assets/images/step4.png">
     </div>
      <h3>Enjoy</h3>
      <p>Food is prepared &amp; delivered to your door</p>
   </div>
   </div>
 </div>

 </div> <!--container-->
</div>




    <div class="panel-footer">
        <p style="text-align:center; padding:5px;">&copy;All Right Reserved By User</p>
    </div>
    </div>
	
	
	</div>
	
	
	
	
		
	</div>	
			
	
</body>
</html>