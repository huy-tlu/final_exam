<?php
	$id = $_GET['id'];
	if(isset($id)){
		if($db->delete('tblexps',"id={$id}")){
			$f->redir("?m=exp&a=list");
		}
	}