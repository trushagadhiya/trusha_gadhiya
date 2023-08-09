<?php
include 'connection.php';
include 'header.php';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" href="lstyle.css" />
    <title>Login Form</title>
	
  </head>
  
  <body>
    <div class="login-wrapper">
      <form action="wel.php" class="form" method="POST">
	  <?php
	  if(isset($_GET['msg']))
		  echo $_GET['msg'];
	  ?>
	  
        <h2>Login</h2>
        <div class="input-group"  >
          <input type="text" border="10" name="User_Name"  required />
          <label for="uname" >User Name</label>
		  
		  
        </div>
        <div class="input-group">
          <input
            type="password"
            name="Password"
            id="Password"
            required
          />
          <label for="Password">Password</label>
        </div>
		
        <input type="submit" name="login" value="Login" class="submit-btn"/>
		
		
		 
      </form>
	  
	  </div>
	
	
	  
</body>
<?php
//<footer>
include 'footer.php';
//</footer>
?>
</html>
