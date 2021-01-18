<?php
	$xtp = new XTemplate("views/edu/edit.html");
	$id = $_GET['id'];
	if(isset($id)){
		$rs = $db->getOne('tbledu',"id={$id}");
		$xtp->assign("EDT",$rs);
		$do_save=1;
		if($_POST){
			$data['edu_1'] = $_POST['txtEdu1'];
			$data['edu_2'] = $_POST['txtEdu2'];
			if($do_save==1){
				if($db->update('tbledu', $data, "id = {$id}")){
					$f->redir("?m=edu&a=list");
				}
			}
		}
	}
	$xtp->parse("EDT");
	$acontent = $xtp->text("EDT");
