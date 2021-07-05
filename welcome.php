<?php 
session_start();
echo "<h2>LOGIN SUCCESSFUL<BR>";
echo "<h3>Welcome" . " " . $_SESSION['username'];
 
 ?>