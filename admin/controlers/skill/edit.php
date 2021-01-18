<?php
	$xtp = new XTemplate("views/skill/edit.html");
	$id = $_GET['id'];
	if(isset($id)){
		$rs = $db->getOne('tblskills',"id={$id}");
		$xtp->assign("EDT",$rs);
		$do_save=1;
		if($_POST){
			$data['skill_1'] = $_POST['txtSkill1'];
			$data['skill_2'] = $_POST['txtSkill2'];
			if($do_save==1){
				if($db->update('tblskills', $data, "id = {$id}")){
					$f->redir("?m=skill&a=list");
				}
			}
		}
	}
	$xtp->parse("EDT");
	$acontent = $xtp->text("EDT");
