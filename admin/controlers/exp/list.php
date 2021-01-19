<?php
	$xtp = new XTemplate("views/exp/list.html");
	$sql = "SELECT user_id, id, exp_1, exp_2 FROM tblexps";
	$rs = $db->fetchAll($sql);
	$nbr=1;
	foreach($rs as $row){
		$row['nbr'] = $nbr++;
		$xtp->assign("LS",$row);
		$xtp->parse("LISTING.LS");
	} 
	$xtp->parse('LISTING');
	$acontent = $xtp->text('LISTING');