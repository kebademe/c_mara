
<?php 
try 
{
 $db = new PDO('mysql:host=localhost;dbname=c_mara', 'root', '');

 //echo "success";
}

 

  catch (Exception $e)

 

 {

        

 die ("Erreur:".$e->getmessage());

 

 }

 ?>

