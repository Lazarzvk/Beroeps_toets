<?php

$sql_username = "81746_DB";
$sql_password = "accD81_9";

try 
{
    $db = new PDO('mysql:host=localhost;dbname=81746_DB', $sql_username, $sql_password);
} 
catch (PDOException $e) 
{
    print "Whooooops! I have received the following errors! <br><hr>" . $e->getMessage() . "<br/>";
    die();
}
