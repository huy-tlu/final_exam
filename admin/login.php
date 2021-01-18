<?php
    include("../libs/boost.php");
    $xtp = new XTemplate("views/signin/login.html");
    $_SESSION['admin']='';
    $sql = "SELECT user_name, user_pass FROM tblusers";
    $rs = $db->fetchAll($sql);
    $flag = 0;
    if($_POST){
        $userName = $_POST['txtUserName'];
        $pwd      = $_POST['txtPwd'];
        $pwd      = sha1($pwd);
        $pwd      = $pwd.$salt;
        var_dump($userName);
        var_dump($pwd);
        foreach($rs as $row){
            if($userName==$row['user_name'] && $pwd==$row['user_pass']){
                $_SESSION['admin'] = $userName;
                $flag=1;
                break;
            }
        }
        if($flag==0){
            $xtp->assign('err_login','UserName or Password invalid!');
        }
        if($flag==1){
            $f->redir("{$baseUrl}/admin/?m=user&a=list");
        }
    }
    $xtp->assign('baseUrl',$baseUrl);
    $xtp->parse("LOGIN");
    $xtp->out("LOGIN");