<?php
	$xtp = new XTemplate("views/skill/list.html");
	$sql = "SELECT user_id, user_name, skill_1, skill_2 FROM tblskills";
	$rs = $db->fetchAll($sql);
	$nbr=1;
	foreach($rs as $row){
		$row['nbr'] = $nbr++;
		$xtp->assign("LS",$row);
		$xtp->parse("LISTING.LS");
	} 
	$xtp->parse('LISTING');
	$acontent = $xtp->text('LISTING');