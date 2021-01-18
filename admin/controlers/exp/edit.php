<?php
	$xtp = new XTemplate("views/exp/edit.html");
	$id = $_GET['id'];
	if(isset($id)){
		$rs = $db->getOne('tblexps',"id={$id}");
		$xtp->assign("EDT",$rs);
		$do_save=1;
		if($_POST){
			$data['exp_1'] = $_POST['txtExp_1'];
			$data['exp_2'] = $_POST['txtExp_2'];
			if($do_save==1){
				if($db->update('tblexps', $data, "id = {$id}")){
					$f->redir("?m=exp&a=list");
				}
			}
		}
	}
	$xtp->parse("EDT");
	$acontent = $xtp->text("EDT");
