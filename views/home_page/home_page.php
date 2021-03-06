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
    <nav class="navbar navbar-expand-sm bg hehe">
    <!-- Links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="navbar-brand" href="home_page.php">E-Resume</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../simple_resume/simple_home.php">Simple Resume</a>
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
  <!-- <div class="container">    
  </div> -->
  <div class="home__features-container">
    <h2 class="home__features-title">Features designed to help you win your dream job</h2>
    <div class="home__features-list">
      <div class="home__features-item">
        <div class="home__features-image home__features-image--builder is-image-loaded"
          data-lazy-bg="https://resume.io/assets/landing/home/features/features_sprite-3765f50fec26dd9e9db94ca03dad05d1fd3cf2fbc34c4619d5d3c7ecd56a4fc1.svg"
          style="background-image: url(&quot;https://resume.io/assets/landing/home/features/features_sprite-3765f50fec26dd9e9db94ca03dad05d1fd3cf2fbc34c4619d5d3c7ecd56a4fc1.svg&quot;);">
        </div>
        <div class="home__features-item-content">
          <div class="home__features-label">Easy online resume builder</div>
          <div class="home__features-text">Create an awesome resume, cover letter or online profile without leaving your
            web browser.</div>
        </div>
      </div>
      <div class="home__features-item">
        <div class="home__features-image home__features-image--writing is-image-loaded"
          data-lazy-bg="https://resume.io/assets/landing/home/features/features_sprite-3765f50fec26dd9e9db94ca03dad05d1fd3cf2fbc34c4619d5d3c7ecd56a4fc1.svg"
          style="background-image: url(&quot;https://resume.io/assets/landing/home/features/features_sprite-3765f50fec26dd9e9db94ca03dad05d1fd3cf2fbc34c4619d5d3c7ecd56a4fc1.svg&quot;);">
        </div>
        <div class="home__features-item-content">
          <div class="home__features-label">Automatic spell-checker</div>
          <div class="home__features-text">Our built-in spell-checker takes care of the grammar for you. Create a resume
            with zero typos or errors.</div>
        </div>
      </div>
      <div class="home__features-item">
        <div class="home__features-image home__features-image--ok-hand is-image-loaded"
          data-lazy-bg="https://resume.io/assets/landing/home/features/features_sprite-3765f50fec26dd9e9db94ca03dad05d1fd3cf2fbc34c4619d5d3c7ecd56a4fc1.svg"
          style="background-image: url(&quot;https://resume.io/assets/landing/home/features/features_sprite-3765f50fec26dd9e9db94ca03dad05d1fd3cf2fbc34c4619d5d3c7ecd56a4fc1.svg&quot;);">
        </div>
        <div class="home__features-item-content">
          <div class="home__features-label">Your data is safe</div>
          <div class="home__features-text">Your data is kept private and protected by strong 256-bit encryption.</div>
        </div>
      </div>
      <div class="home__features-item">
        <div class="home__features-image home__features-image--grammar is-image-loaded"
          data-lazy-bg="https://resume.io/assets/landing/home/features/features_sprite-3765f50fec26dd9e9db94ca03dad05d1fd3cf2fbc34c4619d5d3c7ecd56a4fc1.svg"
          style="background-image: url(&quot;https://resume.io/assets/landing/home/features/features_sprite-3765f50fec26dd9e9db94ca03dad05d1fd3cf2fbc34c4619d5d3c7ecd56a4fc1.svg&quot;);">
        </div>
        <div class="home__features-item-content">
          <div class="home__features-label">Automatic summary generator</div>
          <div class="home__features-text">Create a powerful resume profile or cover letter in one click. Writer’s block
            is no longer an obstacle. Try for free!</div>
        </div>
      </div>
      <div class="home__features-item">
        <div class="home__features-image home__features-image--templates is-image-loaded"
          data-lazy-bg="https://resume.io/assets/landing/home/features/features_sprite-3765f50fec26dd9e9db94ca03dad05d1fd3cf2fbc34c4619d5d3c7ecd56a4fc1.svg"
          style="background-image: url(&quot;https://resume.io/assets/landing/home/features/features_sprite-3765f50fec26dd9e9db94ca03dad05d1fd3cf2fbc34c4619d5d3c7ecd56a4fc1.svg&quot;);">
        </div>
        <div class="home__features-item-content">
          <div class="home__features-label">Approved templates</div>
          <div class="home__features-text">Professionally-designed resume templates approved by recruiters. Just edit
            and download in 5 minutes.</div>
        </div>
      </div>
      <div class="home__features-item">
        <div class="home__features-image home__features-image--job-tracking is-image-loaded"
          data-lazy-bg="https://resume.io/assets/landing/home/features/features_sprite-3765f50fec26dd9e9db94ca03dad05d1fd3cf2fbc34c4619d5d3c7ecd56a4fc1.svg"
          style="background-image: url(&quot;https://resume.io/assets/landing/home/features/features_sprite-3765f50fec26dd9e9db94ca03dad05d1fd3cf2fbc34c4619d5d3c7ecd56a4fc1.svg&quot;);">
        </div>
        <div class="home__features-item-content">
          <div class="home__features-label">Job tracking</div>
          <div class="home__features-text">We’ll keep you ahead of the competition by tracking the employers and jobs
            you apply to.</div>
        </div>
      </div>
      <div class="home__features-item">
        <div class="home__features-image home__features-image--security is-image-loaded"
          data-lazy-bg="https://resume.io/assets/landing/home/features/features_sprite-3765f50fec26dd9e9db94ca03dad05d1fd3cf2fbc34c4619d5d3c7ecd56a4fc1.svg"
          style="background-image: url(&quot;https://resume.io/assets/landing/home/features/features_sprite-3765f50fec26dd9e9db94ca03dad05d1fd3cf2fbc34c4619d5d3c7ecd56a4fc1.svg&quot;);">
        </div>
        <div class="home__features-item-content">
          <div class="home__features-label">Tips from recruiters</div>
          <div class="home__features-text">Create amazing resumes based on expert knowledge and hiring practices
            gathered from actual recruiters.</div>
        </div>
      </div>
      <div class="home__features-item">
        <div class="home__features-image home__features-image--word is-image-loaded"
          data-lazy-bg="https://resume.io/assets/landing/home/features/features_sprite-3765f50fec26dd9e9db94ca03dad05d1fd3cf2fbc34c4619d5d3c7ecd56a4fc1.svg"
          style="background-image: url(&quot;https://resume.io/assets/landing/home/features/features_sprite-3765f50fec26dd9e9db94ca03dad05d1fd3cf2fbc34c4619d5d3c7ecd56a4fc1.svg&quot;);">
        </div>
        <div class="home__features-item-content">
          <div class="home__features-label">Multi-format resume options</div>
          <div class="home__features-text">Save your perfect resume in any common format, including Microsoft Word and
            PDF in a single click.</div>
        </div>
      </div>
      <div class="home__features-item">
        <div class="home__features-image home__features-image--cover-letter is-image-loaded"
          data-lazy-bg="https://resume.io/assets/landing/home/features/features_sprite-3765f50fec26dd9e9db94ca03dad05d1fd3cf2fbc34c4619d5d3c7ecd56a4fc1.svg"
          style="background-image: url(&quot;https://resume.io/assets/landing/home/features/features_sprite-3765f50fec26dd9e9db94ca03dad05d1fd3cf2fbc34c4619d5d3c7ecd56a4fc1.svg&quot;);">
        </div>
        <div class="home__features-item-content">
          <div class="home__features-label">Cover letters</div>
          <div class="home__features-text">Our cover letter builder works with the same ease and use of elegant
            templates as the resume creator.</div>
        </div>
      </div>
    </div>
  </div>
<?php require("footer.php"); ?>