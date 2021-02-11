<?php
      /*  require_once 'connexion.php'; = new PDO("mysql:host=localhost;dbname=apprenants","root", "");
       if(isset($_POST['EMAIL']) AND !empty($_POST['EMAIL']));{
           $sup_EMAIL = htmlspecialchars($_POST['EMAIL']);

        $result = $bd->query('DELETE FROM liste WHERE EMAIL = EMAIL LIMIT 1');
        $result-> execute(array(
        'EMAIL'=>$sup_EMAIL));

        header('location: liste_apprenants.php');
        }*/



        $bd = new PDO("mysql:host=localhost;dbname=apprenants","root", "");
        $bd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        if(isset($_GET["id"]))
        {
            $id = $_GET["id"];
            if(!empty($id) && is_numeric ($id))
            {
                $query = "DELETE FROM liste WHERE id=$id";
                $bd->exec($query);
                header("Location:liste_apprenants.php");
            }
        }
        

       
    ?>


<?php

    /*<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" href="../img/logo.png" type="image/x-icon">
        <link rel="stylesheet" href="../styles/listeapp.css">
        <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&family=Ubuntu:wght@500&display=swap" rel="stylesheet">
        <title>liste des apprenants</title>
    </head>
    <body>
        <h1>Suppression</h1>
        <p> <?=$message?> </p>
    </body>
    </html>*/
    ?>