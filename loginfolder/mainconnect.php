<?php
  $servername  ="localhost";
  $username    ="root";
  $password    ="";
  $bonn=mysqli_connect($servername, $username, $password);
  $query="CREATE DATABASE loginpage";
  mysqli_query($bonn,$query);
?>