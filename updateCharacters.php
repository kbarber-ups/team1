<?php
try
{
	//Open the DB and set error modes
        $db = new PDO('sqlite:database/forum.db'); 
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	//Load this thing up so that we can pass the arguments to the script that does the actual updating
        $result = $db->query("select * from Characters where characterID='$_GET[Characters]'");
	echo '<form action="executeCharacterUpdate.php" method="post">';
	foreach($result as $tuple)
	{	
		echo "<input type=\"hidden\" name=\"same_character_ID\" value=\"$tuple[characterID]\"/>";
		echo "characterAvatar: <input type=\"BL0B\" name=\"characterAvatar\" value=\"$tuple[characterAvatar]\"/><br/>";
		echo "data: <input type=\"BL0B\" name=\"data\" value=\"$tuple[data]\"/><br/>";
		echo "<input type=\"hidden\" name=\"same_userName\" value=\"$tuple[userName]\"/><br/>";
		echo "characterName: <input type=\"text\" name=\"characterName\" value=\"$tuple[characterName]\"/><br/>";
		echo '<input type="submit">';
	}


	//Disconnect from the DB
        $db = null;
}

//Catch and display exceptions if needed
catch (PDOException $e)
{
        echo 'Exception : '.$e->getMessage();
}

?>
