<?php
	$xtp = new XTemplate("views/contact/edit.html");
	$id = $_GET['id'];
	if(isset($id)){
		$rs = $db->getOne('tblcontacts',"id={$id}");
		$xtp->assign("EDT",$rs);
		$do_save=1;
		if($_POST){
			$data['home'] = $_POST['txtHome'];
			$data['mobile'] = $_POST['txtMobi'];
			$data['gmail'] = $_POST['txtGmail'];
			$data['city'] = $_POST['txtCity'];
			if($do_save==1){
				if($db->update('tblcontacts', $data, "id = {$id}")){
					$f->redir("?m=contact&a=list");
				}
			}
		}
	}
	$xtp->parse("EDT");
	$acontent = $xtp->text("EDT");
