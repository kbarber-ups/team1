<?php

// Do it all in a try block!       
try {

	$db = new PDO('sqlite:database/forum.db'); 
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	
	$exists = $db->exec("SELECT * From User Where username = tryUsername AND password = tryPassword");
	

	if(!empty($exists)) {
	setCookie("username", "tryUsername", time()+(86400));
	header('Location:index.php');
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
