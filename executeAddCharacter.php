<?php

// Do it all in a try block!       
try {
	// Connect to the DB
        $db = new PDO('sqlite:database/forum.db');
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	
	//Take the things that were passed to us and add them into the DB
        $db->exec("insert into Characters values ('$_POST[null]', '$_POST[characterAvatar]', '$_POST[characterBio]','$_POST[$_COOKIE["username"]]','$_POST[characterName]');");

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
	header('Location:showCharacters.php');

?>





