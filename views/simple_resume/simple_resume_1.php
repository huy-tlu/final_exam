<?php
	include("../config.php");
	$sql = "SELECT id from tblusers";
  $getUserID = mysqli_query($conn, $sql);
  if(isset($_GET['id'])){
    $id = $_GET['id'];
    if(isset($_POST['btnSubmit'])){
      $firstName = $_POST['txtFirst'];
      $lastName = $_POST['txtLast'];
      $job = $_POST['txtJob'];
      $dob = $_POST['txtDob'];
      $gmail = $_POST['txtEmail'];
      $gender = $_POST['txtGender'];
      $mobile = $_POST['txtPhone'];
      $home = $_POST['txtAddress'];
      $title = $_POST['txtTarget'];
      $edu_1 = $_POST['txtEdu_1'];
      $edu_2 = $_POST['txtEdu_2'];
      $exp_1 = $_POST['txtExp_1'];
      $exp_2 = $_POST['txtExp_2'];
      $skill_1 = $_POST['txtSkill_1'];
      $skill_2 = $_POST['txtSkill_2'];
      $sql_1 = "INSERT INTO tblcontacts (user_id, home, mobile, gmail) VALUES ('$id', '$home', '$mobile', '$gmail')";
      $sql_2 = "INSERT INTO tbledu (user_id, edu_1, edu_2) VALUES ('$id', '$edu_1', '$edu_2')";
      $sql_3 = "INSERT INTO tblexps (user_id, exp_1, exp_2) VALUES ('$id', '$exp_1', '$exp_2')";
      $sql_4 = "INSERT INTO tblprofiles (user_id, first_name, last_name, dob, avatar, gender, job) VALUES ('$id', '$firstName', '$lastName', '$dob', '', ''$gender, '$job')";
      $sql_5 = "INSERT INTO tblskills (user_id, skill_1, skill_2) VALUES ('$id', '$skill_1', '$skill_2')";
      $sql_6 = "INSERT INTO tbltitles (user_id, title) VALUES ('$id', '$title')";
      mysqli_query($conn, $sql_1);
      mysqli_query($conn, $sql_2);
      mysqli_query($conn, $sql_3);
      mysqli_query($conn, $sql_4);
      mysqli_query($conn, $sql_5);
      mysqli_query($conn, $sql_6);
  }
		// var_dump($firstName);
		// var_dump($lastName);
		// var_dump($job);
		// var_dump($dob);
		// var_dump($gmail);
		// var_dump($gender);

	}
?>

<!doctype html>
<html lang="en">

<head>
  <title>Resume</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
    crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="../css/simple_resume/simple_resume_1.css">
  <link rel="stylesheet" href="../css/header.css" type='text/css'>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
    integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
</head>

<body>
<nav class="navbar navbar-expand-sm bg hehe">
    <!-- Links -->
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
  
  <div style="height: 55px; width: 100%; background-color: #0062E6;"></div><br><br>`
	<form method="POST" enctype="multipart/form-data">
	<div class="wrapper flex">
    <div class="sidebar">
      <div class="avatar">
        <img
          src="../image/no_img.png"
		  width="215" height="215" alt="Your Avatar" />
		<input type="file" name='txtAvatar'>
		<br>
        <h1 class="name">
          <div class="form-group">
            <input type="text" class="form-control" id="inputEmail" placeholder="Họ"
              name="txtFirst">
          </div>
          <div class="form-group">
            <input type="text" class="form-control" id="inputEmail" placeholder="Tên"
              name="txtLast">
          </div>
        </h1>
        <h4 class="job">
          <div class="form-group">
            <input type="text" name='txtJob' class="form-control" id="inputEmail" placeholder="Nhập nghề nghiệp của bạn"
              name='txtJob'>
          </div>
        </h4>
      </div>	

      <div class="module">
        <h3 class="module__title">
          <i class="fa fa-user circle circle--medium"></i>
          <span> THÔNG TIN CÁ NHÂN </span>
        </h3>
        <div class="module__content">
          <div class="form-group">
            <p>Ngày sinh:</p><input name="txtDob" type="datetime-local" class="form-control" id="inputEmail"
              placeholder="Nhập ngày sinh của bạn">
          </div>
          <div class="form-group">
            <p>Email:</p><input name="txtEmail" type="email" class="form-control" id="inputEmail"
              placeholder="Nhập email của bạn">
          </div>
          <div class="form-group">
            <p>Giới tính:</p> <input type="text" name="txtGender" class="form-control" id="inputEmail"
              placeholder="Nhập giới tính của bạn">
          </div>
          <div class="form-group">
            <p>Số điện thoại:</p><input name='txtPhone' type="number" class="form-control" id="inputEmail"
              placeholder="Nhập số điện thoại của bạn">
          </div>
          <div class="form-group">
            <p>Địa chỉ:</p> <input type="text" name='txtAddress' class="form-control" id="inputEmail"
              placeholder="Nhập địa chỉ của bạn">
          </div>

        </div>
      </div>

    </div>
    <div class="content">
      <div class="section">
        <h2 class="section__title">
          <i class="fa fa-briefcase circle circle--large"></i>
          <span>MỤC TIÊU NGHỀ NGHIỆP</span>
        </h2>
        <div class="section__content">
          <div class="module">

            <div class="module__content">
              <div class="container">
                <div class="form-group">
                  <label for="comment">Nội dung: </label>
                  <textarea name='txtTarget' class="form-control" rows="5" id="comment"></textarea>
                </div>
              </div>
            </div>
          </div>

          <div class="section">
            <h2 class="section__title">
              <i class="fa fa-briefcase circle circle--large"></i>
              <span>HỌC VẤN</span>
            </h2>
            <div class="section__content">
              <div class="module">
                <div class="container">
                  <div class="form-group">
                    <label for="comment">Nội dung: </label>
                    <textarea name='txtEdu_1' class="form-control" rows="5" id="comment"></textarea>
                  </div>
                  <div class="form-group">
                    <label for="comment">Nội dung: </label>
                    <textarea name='txtEdu_2' class="form-control" rows="5" id="comment"></textarea>
                  </div>
                </div>

              </div>
            </div><!-- End .section__content -->
          </div><!-- End .section #2 -->

          <div class="section">
            <h2 class="section__title">

              <span>KINH NGHIỆM LÀM VIỆC</span>
            </h2>
            <div class="container">
              <div class="form-group">
                <label for="comment">Nội dung: </label>
                <textarea name='txtExp_1' class="form-control" rows="5" id="comment"></textarea>
              </div>
              <div class="form-group">
                <label for="comment">Nội dung: </label>
                <textarea name='txtExp_2' class="form-control" rows="5" id="comment"></textarea>
              </div>
            </div>
            <div class="section">
              <h2 class="section__title">
                <i class="fa fa-briefcase circle circle--large"></i>
                <span>KỸ NĂNG</span>
              </h2>
              <div class="section__content">
                <div class="module">
                  <div class="container">
                    <div class="form-group">
                      <label for="comment">Nội dung: </label>
                      <textarea name='txtSkill_1' class="form-control" rows="5" id="comment"></textarea>
                    </div>
                    <div class="form-group">
                      <label for="comment">Nội dung: </label>
                      <textarea name='txtSkill_2' class="form-control" rows="5" id="comment"></textarea>
                    </div>
                  </div>

                  <div class="section__content">
                    <div class="d-flex justify-content-between align-items-center">
                      <div class="form-group d-flex justify-content-start">
                        <button type="submit" name='btnSubmit' class="btn btn-primary btn-info ">Submit</button>
                      </div>

                    </div>

                  </div>
                </div>
              </div>
            </div>
          </div>
	</form>
</body>

</html>