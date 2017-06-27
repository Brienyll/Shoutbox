<?php
//Connect to MySQL
$con = mysqli_connect("localhost", "root", "123456", "shouts");

//Test Conenction
if(mysqli_connect_errno()) {
  echo 'Failed to Connect to MySQL: '.mysqli_connect_error();
}

 ?>
