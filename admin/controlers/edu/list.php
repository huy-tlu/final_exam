<?php
	$xtp = new XTemplate("views/edu/list.html");
	$sql = "SELECT user_id, id, edu_1, edu_2 FROM tbledu";
	$rs = $db->fetchAll($sql);
	$nbr=1;
	foreach($rs as $row){
		$row['nbr'] = $nbr++;
		$xtp->assign("LS",$row);
		$xtp->parse("LISTING.LS");
	} 
	$xtp->parse('LISTING');
	$acontent = $xtp->text('LISTING');