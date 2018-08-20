 <?php include 'includes/portal-config.php'?>
<!DOCTYPE html>
<html lang="en"> 
<head>
<title><?=$title?></title>
<meta name="viewport" content="width=device-width" />
<meta name="robots" content="noindex,nofollow" />
<meta charset="utf-8">
<script src="https://use.fontawesome.com/6a71565c22.js"></script>
<link rel="stylesheet" href="css/nav.css" />
<link rel="stylesheet" href="css/portal.css" />
<link rel="stylesheet" href="css/form.css" />
<link rel="stylesheet" href="css/tables.css" />
</head>

<body>
<!-- START WRAPPER -->
<div class="wrapper">
<header>
  <div class="header">
  <a href="#default" class="logo"><img src="images/CGlogo.jpeg" class="desktop" alt="" /></a>
      <p>Cantu Group Real Estate</p>
  </div>
    
  <nav>
   
    <ul class="topnav" id="myTopnav">
    <?=makeLinks($nav)?>
        <!--
      <li><a href="index.php" class="selected">Welcome</a></li>
      <li><a href="big/index.php">Big</a></li>
      <li><a href="aia.php">AIA</a></li>
      <li><a href="flowchart.php">Flowchart</a></li>
      <li><a href="fp/index.php">Final Project</a></li>
      <li><a href="contactme.php">Contact Andrew</a></li>
-->
      <li class="icon"> <a href="javascript:void(0);" onclick="myFunction()">&#9776;</a> </li>
    </ul>
  </nav>
</header>
        
<!-- START LEFT COL -->
