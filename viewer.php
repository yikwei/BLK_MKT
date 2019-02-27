<?php
session_start(); 
include("config.php");
      
      $sql = "SELECT world , user, name FROM Posts";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['active'];
	  $count = mysqli_num_rows($result);

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
  </head>

<style>
#posttitle{padding-top: 1%;}
</style>

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
      </ul>
    </div>
  </div>
</nav><!-- END OF NAV BAR ----- -->

</div>
<?php
$sql = "SELECT world , price,image,description, name,id , user ,email FROM Login,Posts WHERE id=".htmlspecialchars($_GET["id"]);
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      
     //echo $row['id'].$row['price'];
      //echo "<div class=\"container-fluid\"><h3>".$row['name']. "</h3>";
      echo "<center><div class=\"page-header\" id=\"posttitle\"><h1>".$row['name'] ."<small> - Posted By:".$row['user'] ." </small></h1></div></center>
      <div class=\"container-fluid\">
      <center>
      <div class=\"row\">
      
        <img src=\"".$row['image']. "\" class=\"img-responsive\">
        <h4>". $row['price'] ." M Mesos/". $row['price']/10 ."USD </h4>
        <h4>World: ". $row['world'] ."</h4>
        ".$row['description'] ."
        <br>
          <a class=\"btn btn-success btn-large\" href=\"mailto: ".$row['email'] ." \">Message</a>
        
          </div>
            </div>
            </center>" 




?>



<div> </div>
<div class ="row">
<?php 
echo "<body>" .htmlspecialchars($_GET["id"]) ."</body>";
?>

</div>