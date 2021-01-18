<?php
	$id = $_GET['id'];
	if(isset($id)){
		if($db->delete('tbltitles',"id={$id}")){
			$f->redir("?m=title&a=list");
		}
	}