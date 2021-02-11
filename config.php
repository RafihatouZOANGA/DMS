<?php 
    try 
    {
        $bdd = new PDO('mysql:host=localhost;dbname=admin;charset=utf8', 'root', '');
        echo "connexion" ;
    }
    catch(Exception $e)
    {
        die('Erreur'.$e->getMessage());
    }
?>

