<?php
  $username   = 'fraser';
  $password   = 'firrhill01';
  $dbname     = 'firrhillcomp_fraser';
  $servername = '127.0.0.1';
  $port       = '3308';

  $conn = mysqli_connect($servername, $username, $password, $dbname, $port);

  if (!$conn) {
      die("<p>Connection failed: " . mysqli_connect_error() . "</p>");
  }
?>