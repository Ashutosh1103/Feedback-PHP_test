<?php
session_start();
$sid=$_SESSION['sid'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
    <!--Navbar -->    
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      
     
     
      <li class="nav-item ">
        <a class="nav-link " href="#">Welcome: <?php   echo $sid; ?></a>
      </li>

      <li class="nav-item ">
        <a class="nav-link " href="Logout.php">Logout</a>
      </li>
    </ul>
    
  </div>
</nav>
</body>
</html>
