<?php

include 'connection.php';
include 'header.php';

?>

<html>
  <head>
  <style>
.wrapper{
height: 90vh;
  width: 90vw;
 display: flex;
 justify-content: bottom;
  align-items: center;
  margin-left:100px;
	
}
.new{
padding:2px;
margin-left:100px;
margin-top:200px;
}

a:link, a:visited {
  background-color: #f44336;
  color: white;
  padding: 14px 25px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
}

a:hover, a:active {
  background-color: red;
}

 
  </style>
  </head>
  
<div class= "wrapper">
 <h1 text align="center"><b>Wel-Come Admin</b></h1></div>
 <body>
 <div class =".new">
<a href="persondetail.php" target="_blank">click me!</a>

 </div>
 </body>

<?php
//<footer>
include 'footer.php';
//</footer>
?>

  </html>
  