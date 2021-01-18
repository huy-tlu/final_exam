<?php
    include("../libs/boost.php");    
    $code = $_GET['code'];
    $user_id = $_GET['user_id'];
    if(isset($code) && isset($user_id)){
        $sql = "select user_id, activation_code from tblusers";
        $rs = $db->fetchAll($sql); 
        foreach($rs as $row){
            if($row['user_id']==$user_id&&$row['activation_code']==$code){
                $data['status'] = 1;
                if($db->update('tblusers', $data, "user_id={$user_id}")){                                
                    echo "Your account is activated";                 
                }
            }
        }         
        // Your account is activated
    }
    else{
        echo "Wrong activation code";
    }