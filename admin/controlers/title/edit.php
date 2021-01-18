<?php
	$xtp = new XTemplate("views/title/edit.html");
	$id = $_GET['id'];
	if(isset($id)){
		$rs = $db->getOne('tbltitles',"id={$id}");
		$xtp->assign("EDT",$rs);
		$do_save=1;
		if($_POST){
			$data['title'] = $_POST['txtTitle'];
			if($do_save==1){
				if($db->update('tbltitles', $data, "id = {$id}")){
					$f->redir("?m=title&a=list");
				}
			}
		}
	}
	$xtp->parse("EDT");
	$acontent = $xtp->text("EDT");
