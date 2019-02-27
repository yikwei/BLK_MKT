<?php
session_start();

   include('session.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>BLK MKT</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;

    }
    
    /* Add a gray background color and some padding to the footer */
    footer {
      background-color: #f2f2f2;
      padding: 25px;
    }
    #myCarousel{padding-top: 3%; }
  .carousel-inner img {
      width: 100%; /* Set width to 100% */
      margin: auto;
      min-height:200px;
  }

  #welc{color: white 1px;}
  /* Hide the carousel text when the screen is less than 600 pixels wide */
  @media (max-width: 600px) {
    .carousel-caption {
      display: none; 
    }
  }
  </style>
</head>
<body>

<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="home.php">BLK MKT</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="home.php">Home</a></li>
        <li><a href="posts.php">Posts</a></li>
        <li><a href="listing.php"> + New Post</a></li>
       
      </ul>
      <ul class="nav navbar-nav navbar-right">
        

<li role="presentation" class="dropdown">
    <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">

      <?php 
         echo "Welcome, ".$_SESSION['user'] ."!"; 
          ?>

      <span class="caret"></span>
    </a>
    <ul class="dropdown-menu">
    <ul>
       Profile
    </ul> 
    <ul>
      Messages
    </ul>
    <ul>
      My Listings
    </ul>
    <ul>
      <a href="logout.php"> Sign Out </a>
    </ul>

    </ul><!-- THIS IS THE END OF DROPDOWN MENU -->

  </li>


      
        <!--  
          <a href="#"> 
             <?php 
         //echo "Welcome, ".$_SESSION['user'] ."!"; 
          ?>

           </a>
         -->
        <!--  <a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a>
        -->
       

      </ul>
    </div>
  </div>

</nav>


<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <!-- <li data-target="#myCarousel" data-slide-to="1"></li> -->
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="https://drive.google.com/uc?export=view&id=16hGURUrZfHGAePuGphk9wGgCUEQiu31r" alt="Image">
        <div class="carousel-caption">
         <!--  <h3>Sell $</h3> -->
          <!-- <p>Money Money.</p> -->
        </div>      
      </div>

      <!-- <div class="item">
        <img src="https://placehold.it/1200x400?text=Another Image Maybe" alt="Image">
        <div class="carousel-caption"> -->
         <!--  <h3>More Sell $</h3> -->
          <!-- <p>Lorem ipsum...</p> -->
       <!-- </div>      
      </div> -->
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
</div>
  
<div class="container text-center">    
  <h3>Featured Products</h3><br>
  <div class="row">
    <div class="col-sm-4">
      <a href="viewer.php?id=4" class="thumbnail">
      <img src="https://i.ytimg.com/vi/-e4Y1FuOal0/hqdefault.jpg" alt="...">
    </a>
      <p>Black Deagle</p>
    </div>
    <div class="col-sm-4"> 
      <a href="viewer.php?id=5" class="thumbnail">
      <img src="https://i.ytimg.com/vi/-e4Y1FuOal0/hqdefault.jpg" alt="...">
    </a>
      <p>Happy Days Board</p>    
    </div>
    <div class="col-sm-4">
      <a href="viewer.php?id=6" class="thumbnail">
      <img src="https://i.ytimg.com/vi/-e4Y1FuOal0/hqdefault.jpg" alt="...">
    </a>
      <p>Snail Reaper Scythe</p>
    </div>
  </div>
</div><br>

<footer class="container-fluid text-center">
	<div class="row">
  		<div class="col-sm-4">
  			<ul>Terms of Service</ul>
  			<ul>About Us</ul>
  			<ul>Sizing Chart</ul>

  		</div>
  		<div class="col-sm-4">
  			Store Hours: 9am - 5pm GMT
  			<br>
  			Monday - Friday
  			<br>
  			Excluding Holidays

  		</div>
  		<div class="col-sm-4">
  			6666 Bazaar Street, 60606
  			<br>
  			Somolia , Africa
  			<br>
  			+6-(666)666-6666
  		</div>
  	</div>
</footer>

</body>
</html>
