<?php
try
{
	//Connect to the DB and set error modes
	$db = new PDO('sqlite:database/forum.db');
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	//Do the actual update with the values that were given to us by the other script
	$db->exec("update Characters set characterID='$_POST[same_character_ID]', characterAvatar='$_POST[characterAvatar]', characterBio='$_POST[characterBio]', username='$_POST[$_COOKIE["username"]]', characterName='$_POST[characterName]'  where characterID='$_POST[old_character_ID]'");
}

//Catch and display error to the user if needed
catch (PDOException $e)
{
	echo 'Exception : '.$e->getMessage();
}
	//Bring us back to the original Plane list
	header('Location:showCharacters.php');

?>
