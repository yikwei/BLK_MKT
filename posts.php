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
        <li><a href="#">Posts</a></li>
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
<body>
<div>

<div class="page-header" id="posttitle">
  <h1>Active Postings <small>--- Black Market Item Exchange</small></h1>
</div>
<?php 
echo "Currently ". $count ." postings are currently listed in the BLK MKT.";
?>

</div>



<div class="row">

<?php 

      $sql = "SELECT world , price,image, name,id FROM Posts";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
	  $counter = 0;
foreach ($result as $row) {
        //echo "id: " . $row['user']. " - Name: " . $row["name"]. " " . $row["world"]. "<br>";
		if($counter == 3)
		{
			echo "<div class=\"row\">";
		}
        echo "<div class=\"col-sm-6 col-md-4\">
    <center><div class=\"thumbnail\">
      <img src=\"".$row['image']. "\" class=\"img-responsive\"><div class=\"caption\">
        <h3>". $row['name']."</h3>
        <p> World: ".$row['world']."</p>
        <p>".$row['price']." M Mesos
        <p><a href=\"viewer.php?id=" . $row['id']."\" class=\"btn btn-primary\" role=\"button\">
        Trade</a></p>
      </div>
    </div>
  </div></center>";
  $counter++;
  	//echo $counter;

        if($counter == 3)
		{
			echo "</row>";
			$counter=0;
		}
    }


?>

</div>

<h4>Legacy</h4>
<table class="table table-condensed">
<tr>
<th>World</th><th>User</th><th>Item Name</th><th>Message</th>
<?php 

      $sql = "SELECT world , user, name FROM Posts";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
	  
foreach ($result as $row) {
        //echo "id: " . $row['user']. " - Name: " . $row["name"]. " " . $row["world"]. "<br>";
        echo "<tr><td>".$row['world']. "</td><td>". $row['user']."</td><td>".$row['name']."</td><td>trade</td></tr>";
    }


?>


 </table>


</body>


  </html>