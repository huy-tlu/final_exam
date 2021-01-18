<?php
	$id = $_GET['id'];
	if(isset($id)){
		if($db->delete('tblskills',"id={$id}")){
			$f->redir("?m=skill&a=list");
		}
	}