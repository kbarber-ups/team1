<?php
	$title = $_POST["title"];

	try {

		// Connect to DB and set error modes.
		$db = new PDO('sqlite.path/to.db');
		$db = setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		// Insert thread using SQLite syntax.
		$db->exec("insert into threads values (threadID, timeCreated, '$_POST[title]', gameMaster, forumID)");

		// Disconnect from DB.
		$db = NULL;

		echo "<br/>";
		echo "Thread successfully created.";
	} catch(PDOException $e) {
		echo "<br/>";
        echo "Exception: ".$e->getMessage();
	}
?>
