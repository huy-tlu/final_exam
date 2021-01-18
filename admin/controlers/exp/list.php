<?php
	$xtp = new XTemplate("views/customer/list.html");
	$sql = "SELECT user_id, user_name, avatar, first_name, last_name, email, class, address1, city, phone FROM tblusers";
	$rs = $db->fetchAll($sql);
	$nbr=1;
	foreach($rs as $row){
		$row['nbr'] = $nbr++;
		$xtp->assign("LS",$row);
		$xtp->parse("LISTING.LS");
	} 
	$xtp->parse('LISTING');
	$acontent = $xtp->text('LISTING');