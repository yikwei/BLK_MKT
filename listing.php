<?php
	session_start();
	
	$conn = new PDO ("mysql:host=172.17.149.54;dbname=Project", 'yik','yik');
	$error = "";
	
	if(isset($_POST["worldList"]) && $_POST["worldList"] != NULL && isset($_POST["itemName"]) && $_POST["itemName"] != NULL && isset($_POST["price"]) && $_POST["price"] 
		!= NULL && isset($_POST["URL"]) && $_POST["URL"] != NULL && isset($_POST["itemDesc"]) && $_POST["itemDesc"] != NULL){
	  
	  $addUserStmt = $conn->prepare(
      		   "Insert into Posts (user, description, name, price, world, image) values (:user, :description, :name, :price, :world, :image)"); 
      $addUserStmt->bindValue(':user', $_SESSION['user']);
      $addUserStmt->bindValue(':description', $_POST["itemDesc"]);
	  $addUserStmt->bindValue(':name', $_POST["itemName"]);
	  $addUserStmt->bindValue(':price', $_POST["price"]);
      $addUserStmt->bindValue(':world', $_POST["worldList"]);
	  $addUserStmt->bindValue(':image', $_POST["URL"]);
      $addUserStmt->execute();
      $addUserStmt->closeCursor();
	  
	  header("Location: http://172.17.149.45/Project/posts.php");
	}
?>

<!DOCTYPE html> 
<html lang="en">
	<head>
		<meta charset="utf-8">
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<!-- jQuery library -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<!-- Latest compiled JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>New Listing</title>
	</head>

<body>
<div>
<center>
<H1>New Listing</H1>
<form action="" id="itemForm" class="form-horizontal" method="POST">
			<div class="form-group">
			<label class="col-sm-4 control-label">World:</label>
			<div class="col-sm-8"><select name="worldList" class="form-control" form="itemForm">
				<option value="Renegades">Renegades</option>
				<option value="Nova">Nova</option>
				<option value="Chaos">Chaos</option>
				<option value="Arcania">Arcania</option>
				<option value="Zenith">Zenith</option>
				<option value="El Nido">El Nido</option>
				<option value="Galicia">Galicia</option>
				<option value="Demethos">Demethos</option>
				<option value="Yellonde">Yellonde</option>
				<option value="Kradia">Kradia</option>
				<option value="Mardia">Mardia</option>
				<option value="Bellocan">Bellocan</option>
				<option value="Khaini">Khaini</option>
				<option value="Windia">Windia</option>
				<option value="Broa">Broa</option>
				<option value="Bera">Bera</option>
				<option value="Scania">Scania</option>
			</select></div>
			</div>
			<div class="form-group">
			<label class="col-sm-4 control-label">Item Name:</label>
			<div class="col-sm-8"><input type="text" class="form-control" name="itemName"/></div>
			</div>
			<div class="form-group">
			<label class="col-sm-4 control-label">Price:</label>
			<div class="col-sm-8"><input type="number" class="form-control" name="price" min="1" step="1"/></div> 
			</div>
			<div class="form-group">
			<label class="col-sm-4 control-label">Image URL:</label>
			<div class="col-sm-8"><input type="text" class="form-control" name="URL"/></div>
			</div>
	<div class="form-group">		
	<label class="col-sm-4 control-label">Description:</label>
	<div class="col-sm-8"><textarea id="desc" class="form-control" name="itemDesc" form="itemForm" rows="5" cols="50"></textarea></div><br><br>
	</div>
	<div class="form-group"><div>
	<input type="submit" id="post" name="submit" class="btn btn-primary" value="Post"/>
	</div></div>
</form>	
</center>
</div>	
</body>
</html>

<style type="text/css">
	body{ background-color: white; }
	td{
		padding: 5px;
	}
	div{
		margin-left: auto;
		margin-right: auto;
	}
	textarea{
		resize: none;
	}
	#itemForm{
		width:30%;
		margin-right: 165px;
	}
	#post{
		margin-left: 140px;
	}
</style>