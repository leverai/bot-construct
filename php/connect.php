<?php
	$host = "slava00000.beget.tech";
	$user="slava00000_botc";
	$pass="oU0*GnrDUiqz";
	$db="slava00000_botc";
    $charset="utf8";
    $dsn = "mysql:host=$host;dbname=$db;charset=$charset";
    
    $opt = array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION,
    	PDO::ATTR_DEFAULT_FETCH_MODE=>PDO::FETCH_ASSOC,
    	PDO::ATTR_EMULATE_PREPARES=>false,);
    $pdo = new PDO($dsn,$user,$pass,$opt);
?>
