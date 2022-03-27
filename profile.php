<?php include_once("connection.php");   ?>



<link rel="stylesheet" href="style.css" />


<div class="sections section-grey2 section-profile">
  <div class="container">

  <div class="row">
  <div class="col-md-8 ">
  
  <div class="tabs-wrapper">
     <ul id="tabs">
       <li class="">
       <i class="ion-android-contact"></i> <span>Profile</span>
       </li> 
             
       <li class="address-book ">
         <i class="ion-ios-location-outline"></i> <span>Address Book</span>
       </li>
       
       <li><i class="ion-ios-book-outline"></i> 
       <span>Order History</span>
       </li>
       
              
       <li class="active"><i class="ion-android-favorite-outline"></i> 
       <span>Favorites</span>
       </li>
       
              <li class="">
       <i class="ion-card"></i> <span>Credit Cards</span>
       </li>
              
             
     </ul>
     
     <ul id="tab">
       <li class="">
          
<div class="box-grey rounded" style="margin-top:0;">

<form class="profile-forms forms has-validation-callback" id="forms" onsubmit="return false;">
<input type="hidden" value="updateClientProfile" name="action" id="action"><input type="hidden" value="store" name="currentController" id="currentController">

<div class="row bottom10">
  <div class="col-md-6">
    <p class="text-small">First Name</p>
    <input class="grey-fields full-width" data-validation="required" type="text" value="First name" name="first_name" id="first_name">     
  </div>
  <div class="col-md-6">
    <p class="text-small">Last Name</p>
	<input class="grey-fields full-width" data-validation="required" type="text" value="Last name" name="last_name" id="last_name">  </div>
</div>


<div class="row bottom10">
  <div class="col-md-6">
    <p class="text-small">Email address</p>
    <input class="grey-fields full-width" data-validation="required" disabled="disabled" type="text" value=".....@gmail.com" name="email" id="email">     
  </div>
  <div class="col-md-6">
    <p class="text-small">Contact phone</p>
	 

<div class="row bottom10">
  <div class="col-md-6">
    <p class="text-small">Password</p>
  <input class="grey-fields full-width" type="password" value="" name="password" id="password">  </div>
  <div class="col-md-6">
    <p class="text-small">Confirm Password</p>
	<input class="grey-fields full-width" type="password" value="" name="cpassword" id="cpassword">  </div>
</div>

<div class="row">  
  <div class="col-md-6">
	<input type="submit" value="Save" class="green-button medium">  
 </div>	
</div>


</form>
</div> <!--box-->       </li>
       <li class="">
         
<div class="box-grey rounded section-address-book" style="margin-top:0;">



<div class="bottom10 top10">
<a class="green-button inline rounded" href="/profile?tab=2&amp;do=add">
Add New</a>
</div>




</div> 
    </li>
    <li class="">
    <div class="box-grey rounded section-order-history" style="margin-top:0;">

<div class="bottom10">
    <div class="section-label">
    <a class="section-label-a">
    <span class="bold">
    Your Recent Order</span>
        <b></b>
        </a>     
        </div>    
        </div>
    <p class="text-danger">No order history</p>
    
</div>                
    </li>
       
       
              
       <li class="active">
        
<div class="box-grey rounded section-order-history" style="margin-top:0;">

<div class="bottom10">
    	<div class="section-label">
	    <a class="section-label-a">
	      <span class="bold">
	      Your favorite restaurant</span>
	      <b></b>
	    </a>     
	   </div>    
    	</div>

<table class="table table-striped  favorites_list">
        
  <tbody>

</tbody></table>

</div>       </li>
       
              <li class="">
       

<div class="box-grey rounded section-credit-card" style="margin-top:0;">

    <div class="bottom10 top10">
    <a class="green-button inline rounded" href="/profile?tab=4&amp;do=add">
    Add New
    </a>
    </div>


<div class="clear"></div>

</div>     
       </li>
              
     </ul>
  </div> 
  
      
    </div> 

        <div class="col-md-4 avatar-section">
        <div class="box-grey rounded" style="margin-top:0;">

        <div class="avatar-wrap">
        <img src=" " class="img-circle">
        </div> 

        <div class="center top10">
        <a href="javascript:;" id="single_uploadfile" data-progress="single_uploadfile_progress" data-preview="avatar-wrap" style="cursor: pointer;">
        Browse             
        </a>          
    </div>

         
          
        <div class="line-top line-bottom center">
        Update your profile picture          
        </div>
          
                    
                 
        </div>
        </div> <!--col-->
    
        </div> <!--row-->
        </div> <!--container-->  
        </div>