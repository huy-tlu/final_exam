<?php
    include("../libs/boost.php");
    $_SESSION['admin']='';
    session_destroy();
    $f->redir("{$baseUrl}/admin/login.php");