<?php
	$id = $_GET['id'];
	if(isset($id)){
		if($db->delete('tblcontacts',"id={$id}")){
			$f->redir("?m=contact&a=list");
		}
	}