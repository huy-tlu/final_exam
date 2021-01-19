<?php
  if(isset($_GET['id'])){
    $id = $_GET['id'];
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Simple Home</title>
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
    <link rel="stylesheet" href="../../css/simple_resume/simple_resume_1.css" type='text/css'>
  <link rel="stylesheet" href="../../css/header.css" type='text/css'>
</head>
<body>
<nav class="navbar navbar-expand-sm bg hehe">
   
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="navbar-brand" href="../home_page/home_page.php">E-Resume</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="http://localhost:86/final_exam/views/simple_resume/simple_home.php">Simple Resume</a>
      </li>
      <!-- <li class="nav-item">
        <a class="nav-link" href="#">Modern Resume</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Professional Resume</a>
      </li> -->
      &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
      <li class="nav-item user">
        <a class="nav-link" href="../login/login.php"><i class="fas fa-user">&emsp;LogIn</i></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../login/signup.php"><i class="fas fa-user-plus">&emsp;SignUp</i></a>
      </li>
    </ul>
  </nav>
  
  <div style="height: 55px; width: 100%; background-color: #0062E6;"></div>

<div class="containers">
  <div class="jumbotron">
    <h1 class="text-white">
      <center>Design anything.</center>
    </h1>
    <span style="color: rgb(255, 255, 255);">
      <center>"The world always seems brighter when you've just made something that
        wasn't there before." — Neil Gaiman</center>
    </span>
  </div>
</div><br>

    <div class='container'>
        <div class='row'>            
            <div class='col-sm-4 '>
                <a href="http://localhost:86/final_exam/views/simple_resume/simple_resume_1.php??id=<?php echo $id ?>"><img src='../image/simple_1.png' alt="simple resume" width=100% height=100% /></a>
            </div>               
            <!-- <div class='col-sm-4 border border-dark'>
                <img src='../image/simple_1.png' alt="simple resume" width=100% height=100% />
            </div>               
            <div class='col-sm-4 border border-dark'>
                <img src='../image/simple_1.png' alt="simple resume" width=100% height=100% />
            </div>     -->
        </div>    
    </div>
    <br><br><br>
</body>
</html>