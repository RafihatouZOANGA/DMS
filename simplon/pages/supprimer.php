<?php

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
