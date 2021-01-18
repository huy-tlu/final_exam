<?php
	$xtp = new XTemplate("views/profile/edit.html");
	$id = $_GET['id'];
	if(isset($id)){
		$rs = $db->getOne('tblprofiles',"id={$id}");
		$xtp->assign("EDT",$rs);
		$do_save=1;
		if($_POST){
			$data['first_name'] = $_POST['txtFirst'];
			$data['last_name'] = $_POST['txtLast'];
			$data['dob'] = $_POST['txtDob'];
			$data['gender'] = $_POST['txtGender'];
			$file = $_FILES['txtAvatar'];
			$arFileType = array('jpg','png', 'jpeg');
			$sUrl = "./img/avatar";
			$maxFileSize = 5000000;
			$data['avatar'] = $f->uploadFile($file, $sUrl, $arFileType, $maxFileSize);
			if($do_save==1){
				if($db->update('tblprofiles', $data, "id = {$id}")){
					$f->redir("?m=profile&a=list");
				}
			}
		}
	}
	$xtp->parse("EDT");
	$acontent = $xtp->text("EDT");
