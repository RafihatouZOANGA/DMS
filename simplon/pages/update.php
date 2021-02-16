<?php

        require_once 'connexion.php';
        $nom = $_POST['NOM'];
        $prenom = $_POST['PRENOM'];
        $naissance = $_POST['NAISSANCE'];
        $adresse = $_POST['ADRESSE'];
        $telephone = $_POST['TELEPHONE'];
        $email = $_POST['EMAIL'];

        $modif = $db->prepare('UPDATE liste SET NOM=?, PRENOM=?, NAISSANCE=?, ADRESSE=?, TELEPHONE=?, EMAIL=? WHERE EMAIL=?');

        $modif->execute(array($nom, $prenom, $naissance, $adresse, $telephone, $email, $email));
        if ($modif){
            header("Location:liste_apprenants.php");
        }
        
    

        ?> 