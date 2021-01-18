<?php
	$xtp = new XTemplate("views/users/edit.html");
	$id = $_GET['id'];
	if(isset($id)){
		$rs = $db->getOne('tblusers',"user_id={$id}");
		$xtp->assign("EDT",$rs);
		$do_save=1;
		if($_POST){			
			$data['user_name'] = $_POST['txtUser'];
			$data['email'] = $_POST['txtEmail'];
			$data['user_level'] = $_POST['txtLevel'];
			$data['status'] = $_POST['txtStatus'];
			$data['password'] = $_POST['txtPwd'];
			$data['password']  = sha1($data['password']);
			$data['password']  = $data['password'].$salt;
			
			if($do_save==1){
				if($db->update('tblusers',$data,"user_id={$id}")){
					$f->redir("?m=users&a=list");
				}
			}
		}
	}
	$xtp->parse("EDT");
	$acontent = $xtp->text("EDT");
