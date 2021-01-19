<?php
    include("../config.php");
    // $_SESSION['views'] = '';
    $sql = "SELECT id, user_name, user_pass FROM tblusers";
    $rs = mysqli_query($conn, $sql);
    $flag = 0;
    if($_POST){
        $userName = $_POST['txtUserName'];
        $pwd      = $_POST['txtPwd'];
        $pwd      = sha1($pwd);
        $pwd      = $pwd.sha1("final_exam");
        // var_dump($userName);
        // var_dump($pwd);
        foreach($rs as $row){
            if($userName==$row['user_name'] && $pwd==$row['user_pass']){
                $_SESSION['views'] = $userName;
                $flag=1;
                break;
            }
        }
        if($flag==0){
            // $error = echo "UserName or Password invalid!";
        }
        foreach($rs as $row){
            if($flag==1){
                header("Location: http://localhost:86/final_exam/views/simple_resume/login_ed.php/?id={$row['id']}");
            }
        }
    }
    
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LogIn</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script type="text/javascript" src="../js/login.js"></script>

    <link rel="stylesheet" href="../css/login.css" type="text/css">
    <style></style>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
                <div class="card card-signin my-5">
                    <div class="card-body">
                        <h5 class="card-title text-center">Sign In</h5>
                        <form class="form-signin" method="POST" name='frmLogin' id="requestLogin">
                            <div class="form-label-group">
                                <input id="inputUserName" type="text" name='txtUserName' class="form-control"
                                    placeholder='Enter your User Name' required autofocus>
                                <label for="inputUserName">User Name</label>
                                <span style='color:red' id="mesUser"></span>
                            </div>

                            <div class="form-label-group">
                                <input id="inputPass" type="password" name="txtPwd" class="form-control"
                                    placeholder="Enter your Pass word" required>
                                <label for="inputPass">Password</label>
                                <span style='color:red' id="mesPass"><?php if($flag ==0) echo "UserName or Password invalid!" ?></span>
                            </div>

                            <input class="btn btn-lg btn-google btn-block text-uppercase" type="submit" value='Login'
                                name='btnSubmit' id='btnSubmit' />

                            <div class=" mt-3">
                                <span></span>
                                <a href="signup.php"
                                    class="btn btn-lg btn-facebook btn-block text-uppercase">Register</a>
                            </div>
                            <hr class="my-4">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>