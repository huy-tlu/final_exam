<?php
	$xtp = new XTemplate("views/contact/list.html");
	$sql = "SELECT user_id, id, home, mobile, gmail, city FROM tblcontacts";
	$rs = $db->fetchAll($sql);
	$nbr=1;
	foreach($rs as $row){
		$row['nbr'] = $nbr++;
		$xtp->assign("LS",$row);
		$xtp->parse("LISTING.LS");
	} 
	$xtp->parse('LISTING');
	$acontent = $xtp->text('LISTING');