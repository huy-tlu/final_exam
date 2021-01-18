<?php
	$id = $_GET['id'];
	if(isset($id)){
		if($db->delete('tblusers',"user_id={$id}")){
			$f->redir("?m=users&a=list");
		}
	}