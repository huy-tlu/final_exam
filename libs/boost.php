	<?php
		session_start();
		include("XTemplate.class.php");
		include("Model.class.php");
		include("Func.class.php");
		include("Validate.class.php");
		include("class.phpmailer.php");
		include("class.phpmaileroauth.php");
		include("class.smtp.php");
		$db = new Model('resume_web','root','');
		$f = new Func;
		$valid = new Validate;
		$salt = sha1("final_exam");
		$mail = new PHPMailer();
		$baseUrl = "http://".$_SERVER['HTTP_HOST']."/final_exam";
?>
