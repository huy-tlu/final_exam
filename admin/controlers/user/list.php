<?php
	$xtp = new XTemplate("views/user/list.html");
	$sql = "SELECT id, user_name, user_pass, user_level, registration_date, status FROM tblusers";
	$rs = $db->fetchAll($sql);
	$nbr=1;
	foreach($rs as $row){
		$row['nbr'] = $nbr++;
		$xtp->assign("LS",$row);
		$xtp->parse("LISTING.LS");
	} 
	$xtp->parse('LISTING');
	$acontent = $xtp->text('LISTING');
    $axtp->assign('baseUrl', $baseUrl);   