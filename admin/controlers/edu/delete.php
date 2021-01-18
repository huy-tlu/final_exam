<?php
	$id = $_GET['id'];
	if(isset($id)){
		if($db->delete('tbledu',"id={$id}")){
			$f->redir("?m=edu&a=list");
		}
	}