<?php
	$id = $_GET['id'];
	if(isset($id)){
		if($db->delete('tblprofiles',"id={$id}")){
			$f->redir("?m=profile&a=list");
		}
	}