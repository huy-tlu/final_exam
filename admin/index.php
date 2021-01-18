<?php
	include("../libs/boost.php");
	$axtp = new XTemplate('views/index.html');
	if($_SESSION['admin']==''){
		$f->redir("login.php");
	}
	else{
		$m = $_GET['m'];//get module;
		$a = $_GET['a'];//get module;
		if(file_exists("controlers/{$m}/{$a}.php")){
			include("controlers/{$m}/{$a}.php");
		}
		else{
			echo 'Not Found 404';
		}
		$axtp->assign('acontent',$acontent);
		$axtp->assign('baseUrl',$baseUrl);
		$axtp->parse("LAYOUT");
		$axtp->out("LAYOUT");
	}
	