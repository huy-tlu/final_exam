<?php
    include("../libs/boost.php");
    $xtp = new XTemplate("views/signin/signup.html");
    $do_save=1;
    $sql = "SELECT user_name FROM tblusers";
    $rs = $db->fetchAll($sql);   
    if($_POST){
        $data['user_name'] = $_POST['txtUsersName'];
        $data['user_pass']  = $_POST['pwd'];
        $data['user_pass']  = sha1($data['user_pass']);
        $data['user_pass']  = $data['user_pass'].$salt; 
        foreach($rs as $row){
            if($_POST['txtUsersName'] == $row['user_name']){
                $do_save = -1;
                $errExisted = "User Name existsed";
                $xtp->assign('errExisted', $errExisted);
            }
        }
        if(!$valid->isString($_POST['txtUsersName'])){
            $er_1 = "Error";
            $xtp->assign('er_1', $er_1);
            $do_save=-1;
        }
        // if(!$valid->isString($_POST['txtEmail'])){
        //     $er_2 = "Error";
        //     $xtp->assign('er_2',$er_2);
        //     $do_save=-1;
        // }
        if(!$valid->isString($_POST['pwd'])){
            $er = "Error";
            $xtp->assign('er',$er);
            $do_save=-1;
        }
        if($do_save==1){
            // $code = sha1(rand().time()); 
            // $data['activation_code'] = $code;
            if($db->insert('tblusers',$data)){
                // $sql = "SELECT user_id FROM tblusers";  
                // $rs = $db->fetchAll($sql);                   
                // $mail->SMTPDebug = 3;                                 
                // $mail->isSMTP();                                       
                // $mail->Host = 'smtp.gmail.com;';                       
                // $mail->SMTPAuth = true;                              
                // $mail->Username = 'huy.nq.408@aptechlearning.edu.vn';               
                // $mail->Password = 'Ngochuyenn2000';                     
                // $mail->SMTPSecure = 'tls';                          
                // $mail->Port = 587;                                     
                // $mail->setFrom($_POST['txtEmail'], 'Nguyen Quang Huy');  
                // $mail->addAddress($_POST['txtEmail']);                 
                // $mail->addReplyTo($_POST['txtEmail'], 'Nguyen Quang Huy - 60TH5');                     
                // $mail->isHTML(true);                                   
                // $mail->Subject = 'Nguyen Quang Huy - 60TH5';  
                // foreach($rs as $row){
                //     $mail->Body  = 'This is mail active account ^^ <br><br>
                //                     <a href="'.$baseUrl.'/admin/activate.php/?user_id='.$row['user_id'].'&code='.$code.'" a>'.$baseUrl.'/admin/activate.php/?user_id='.$row['user_id'].'&code='.$code.'</a>';
                // } 
                // if($mail->send()) {  
                //     echo 'Message has been sent';  
                // } 
                // else {  
                //     echo 'Message could not be sent';  
                // } 
                $f->redir("{$baseUrl}/admin/login.php");
            }
        }
    }
    $xtp->assign('baseUrl',$baseUrl);
    $xtp->parse('SIGNUP');
    $xtp->out('SIGNUP');