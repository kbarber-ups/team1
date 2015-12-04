<?php

// Do it all in a try block!       
try {

	$db = new PDO('sqlite:database/forum.db'); 
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	
	$exists = $db->exec("select from User where userName = tryUsername and password = tryPassword");
	

	if(!empty($exists)) {
	setCookie("username", "tryUsername", time()+(86400));
	setCookie("password", "tryPassword", time()+(86400));
	}
	
	if(empty($exists)) {
	header('Location:failedLogin.php');
	}
	}
catch(PDOException $e)
{
        echo "<br/>";
	echo "You dun goofed at executeLogin.php!";
	echo "<br/>";
        echo "Exception: ".$e->getMessage();
}

?>
