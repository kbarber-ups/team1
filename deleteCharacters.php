<?php
try
{	
	//Connect to the DB and set error modes
	$db = new PDO('sqlite:database/forum.db');
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	//Do the deletion (scary!)
	$db->exec("delete from Characters where characterID='$_GET[Characters]'");

	//Disconnect from the DB
	$db = null;
}

//Catch and displays errors to the user if needed
catch (PDOException $e)
{
	echo 'Exception : '.$e->getMessage();
}
	//Redirect back to the original list showing all the planes
	header('Location:showCharacters.php');
?>
