<?php

// Do it all in a try block!       
try {
	// Connect to the DB
        $db = new PDO('sqlite:database/forum.db');
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	
	//Take the things that were passed to us and add them into the DB
        $db->exec("insert into Characters values ('$_POST[characterID]', '$_POST[characterAvatar]', '$_POST[data]','$_POST[username]','$_POST[Character Name]');");

	//Disconnect from the DB
        $db = NULL;

        echo "<br/>";
        echo " Character successfully added!";
}

//Catch the exception and display it for the user.
catch(PDOException $e)
{
        echo "<br/>";
	echo "You dun goofed!";
	echo "<br/>";
        echo "Exception: ".$e->getMessage();
}

?>





