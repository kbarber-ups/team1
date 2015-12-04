 <?php
     try
     {
         //open the sqlite database file
         $db = new PDO('sqlite:database/forum.db'); 
 
         // Set errormode to exceptions
         $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 
         //Select all passengers
         $result = $db->query('SELECT * FROM Characters'); //add tie-in to current username
 
         //Loop through each tuple in result set
         foreach($result as $tuple)
         {
               echo "$tuple[characterName] <a href=deleteCharacter.php?Characters=$tuple[characterID]>delete</a> <a href=updateCharacters.php?Characters=$tuple[characterID]>update</a> <br/>";
         }
 
         //Disconnect from database
         $db = null;
     }
     catch(PDOException $e)
     {
         echo 'Exception : '.$e->getMessage();
     }
 ?>
