<?php
   include("config.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($db,$_POST['username']);
      $mypassword = md5(mysqli_real_escape_string($db,$_POST['password'])); 
      
      $sql = "SELECT username FROM Login WHERE username = '$myusername' and passwd = '$mypassword'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['active'];
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
    
      if($count == 1) {
         //session_register("myusername");
         $_SESSION['user'] = $myusername;
         echo "login is successful";
         header('Location: '."home.php");
         
      }else {
         $error = "Your Login Name or Password is invalid";
         echo "<center><h4>".$error."</h4> </center>";
      }
   }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>BLK MKT Login</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<style type="text/css">
	.form-horizontal{
					width:35%;}

  .checkbox{padding-right: 10%;}
  .form-group{padding-right: 10%;}
  h4{color: red;}
</style>


	<center><h2> Blk Mkt Login </h2></center>
<center>
  <form class="form-horizontal" action="" method="post">
  <div class="form-group">
    <label class="col-sm-2 control-label">Username</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="username" id="User" placeholder="Username">
    </div>
  </div>
  <div class="form-group">
    <label class="col-sm-2 control-label">Password</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" name="password" placeholder="Password">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <div class="checkbox">
        <label>
          <input type="checkbox"> Remember me
        </label>
      </div>
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <!-- <button type="submit" id="signin" class="btn btn-default" value="submit">Sign in</button> -->
      <!-- <input type="submit" value="Submit"> -->
      <button type="submit" class="btn btn-default">Submit</button>
    </div>
  </div>
</form>


<inline>
  <body>Don't have an account?
 <!-- <button type="button" class="button">Sign Up</button> -->
 <a href="http://172.17.149.45/Project/createAccount.php"> Sign up now!</a>
  </body>
</inline>

</form>
</center>
</html>