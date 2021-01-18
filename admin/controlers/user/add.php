<?php
    $xtp = new XTemplate("views/users/add.html");
    $do_save=1;
    if($_POST){
        // $data['user_name'] = $_POST['txtUser'];
        // $data['email'] = $_POST['txtEmail'];
        // $data['user_level'] = $_POST['txtLevel'];
        // $data['status'] = $_POST['txtStatus'];
        // $data['password'] = $_POST['txtPwd'];
        // $data['password']  = sha1($data['password']);
        // $data['password']  = $data['password'].$salt;
        
        $data['user_name'] = $_POST['user_name'];
        $data['email'] = $_POST['email'];
        $data['user_level'] = $_POST['user_level'];
        $data['status'] = $_POST['status'];
        $data['password'] = $_POST['password'];
        $data['password']  = sha1($data['password']);
        $data['password']  = $data['password'].$salt;

        $xtp->assign('ADD',$data);
        if($do_save==1){
            if($db->insert('tblusers',$data)){
                $f->redir("?m=users&a=list");
            }
        }
    }
    $xtp->parse('ADD');
    $acontent = $xtp->text('ADD');
    $axtp->assign('baseUrl', $baseUrl);    
?>
