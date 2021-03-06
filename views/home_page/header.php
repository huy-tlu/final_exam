<?php 
    include("../config.php"); 
    // $_SESSION['views'] = '';
    $sql = "SELECT * from tblusers";
    $result = mysqli_query($conn, $sql);   
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  <!-- Popper JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

  <!-- Latest compiled JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
    integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

  <link rel="stylesheet" href="../css/header.css" type='text/css'>
</head>

<body>
  <?php if($_SESSION['views'] != ''){ ?> 
    <nav class="navbar navbar-expand-sm bg hehe">
    <!-- Links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="navbar-brand" href="home_page.html">E-Resume</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../simple_resume/simple_home.html">Simple Resume</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Modern Resume</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Professional Resume</a>
      </li>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
      <li class="nav-item user">
        <span class="nav-link text-warning">Welcome <?php foreach($result as $row) echo $row['user_name'] ?></span>
      </li>
      <li class="nav-item user">
        <button class="nav-link text-warning">Logout <?php session_destroy();?></button>
      </li>
    </ul>
  </nav>
  <?php } 
  else{ ?>
    <nav class="navbar navbar-expand-sm bg hehe">

    <!-- Links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="navbar-brand" href="home_page.html">E-Resume</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../simple_resume/simple_home.html">Simple Resume</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Modern Resume</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Professional Resume</a>
      </li>&emsp;&emsp;&emsp;&emsp;
      <li class="nav-item user">
        <a class="nav-link" href="../login/login.php"><i class="fas fa-user">&emsp;LogIn</i></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../login/signup.php"><i class="fas fa-user-plus">&emsp;SignUp</i></a>
      </li>
    </ul>
  </nav>
  <?php } ?>
  
  <!-- <div style="height: 55px; width: 100%; background-color: #0062E6;"></div> -->