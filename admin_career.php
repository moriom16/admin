<?php include_once("connection.php");   ?>


<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title> </title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"/>
    
<style>

    .default-container{
        width:960px;
        margin:20px;
        padding:2% 10%;
    }
    .form-group{
        margin-bottom:9px;
    }
</style>
</head>
<body>
	<div id="wrapper">
	<header> 
	<div id="header"> 
		<h2>Apply Job Post </h2>
	</div>
	</header>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
        <a class="nav-item nav-link active" href="job.php">Fill up form</a>

      
    </div>
  </div>
</nav>


<div class="default-container">


        <form method="POST">

        <div class="form-group">
            <label for="inputTitle">Full Name:</label>
            <input type="text" name="title" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="inputTitle">Email Address: </label>
            <input type="email" name="title" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="inputTitle">Contact Number: </label>
            <input type="numeric" name="title" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="location">Location: </label>
            <input type="text" name="location" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="category">Category</label>
            <select id="category" class="form-control" required>
            <option selected >Choose...</option>
            <option>Rider</option>
            <option>Restaurent Owner</option>
            <option>Homechef</option>
            <option>Commercial</option>
            </select>
        </div>
        <br>
        <div class="form-group">
            <p>How much of experience do you have in influencer marketing, campaign marketings and social media marketings?*  </p>
            <textarea name="" id="" cols="100%" rows="3"></textarea>

        </div>

        <div class="form-group">
            <p>What is your current monthly salary*  </p>
            <textarea name="" id="" cols="100%" rows="1"></textarea>

        </div>

        <div class="form-group">
            <p>What are your salary expectations?  </p>
            <textarea name="" id="" cols="100%" rows="1"></textarea>

        </div>


        <div class="form-group">
            <label for="FormControlFile1">Attach Resume/CV</label><br>
            <input type="file" class="form-control-file" id="FormControlFile1">
        </div>



        <button style= "margin-top:10px; margin-bottom:10px;" class="btn btn-success" type="submit" name="att">Submit</button>
        </form>
      </div>
<br>
</div>
</div>


    <div class="panel-footer">
        <p style="text-align:center;padding:5px;">&copy;2022</p>
    </div>
</div>
	
	
	</div>
	
	
	
	
		
	</div>	
			
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</body>
</html>