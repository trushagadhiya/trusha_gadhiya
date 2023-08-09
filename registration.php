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
	
    <link rel="stylesheet" href="rstyle.css" />
    <title>Registration
	Form Demo</title>
  </head>
  <body>
  
    <div class="login-wrapper">
	
      <form action="mainlogin.php" class="form" method="POST">
	  <?php
	  if(isset($_post['msg']))
		  echo $_post['msg'];
	  ?>
        <h2>Registration Form</h2>
		<div class="input-group">
          <input type="text" name="user_name" id="user_name" required />
          <label for="Uname">User Name:</label>
        </div>
		<div class="input-group">
          <input type="text" name="first_name" id="first_name" required />
          <label for="Uname">First Name:</label>
        </div>
		<div class="input-group">
          <input type="text" name="last_name" id="last_name" required />
          <label for="Uname">Last Name:</label>
        </div>
	<div> 
	<label for="loginUser">Gender:</label>
	 <br>
<input type="radio" value="Male" name="gender" checked > Male   
<input type="radio" value="Female" name="gender"> Female   
<input type="radio" value="Other" name="gender"> Other  
</div>  <br>
<label>  
<div class="input-group">
          <input type="email" name="email" id="email" required />
          <label for="loginUser">Email Id:</label>
        </div> 
		<div class="input-group">
          <input type="text" name="address" id="address" required />
          <label for="loginUser">Address:</label>
        </div>
		
		<div class="input-group">
          <input type="number" name="phone_no" id="phone_no" required />
          <label for="loginUser">Phone No:</label>
        </div>
        <div class="input-group">
          <input
            type="password"
            name="password"
            id="password"
            required
          />
         <label for="password">Password:</label>
		  </div>
		
		 <h8 text align="center"><a href="adminlogin.php"> <u><b></b></u></a>
		  
       <input type="reset" value="cancle" class="cancle-btn" />
		<input type="submit" value="submit" class="submit-btn"<h6 text align="right"> />
		
		 
      </form>
	  
	  </div>

  </body>
  <?php
//<footer>
include 'footer.php';
//</footer>
?>

  
  </html>
   

  
