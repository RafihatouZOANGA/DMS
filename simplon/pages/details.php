<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" href="../img/logo.png" type="image/x-icon">
	<link rel="stylesheet" href="../styles/listeapp.css">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&family=Ubuntu:wght@500&display=swap" rel="stylesheet">
	<title>Détails de l'apprenant</title>
</head>
<body>

    <?php
        $bd = new PDO("mysql:host=localhost;dbname=apprenants","root", "");
        $bd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $result = $bd->query('SELECT FROM liste WHERE EMAIL = EMAIL');

        if (!$result){
            echo"la recuperation a echoue";

            }
            else{
        $nbre = $result->rowCount();
            }
    ?>

<?php

        if (!$result){
            echo"la recuperation a echoue";

            }
            else{
        $nbre = $result->rowCount();
            }
    ?>


        <h4 class="text-center text-danger titre_detail"><strong>Les détails de l'apprenant</strong></h4> <br>

	<div class="container-fluid">
        <div class="row">
            <div class="col-2"></div>
            <div class="col-8">
                <div class="liste_tableau">
                    <table width=100%>
                        <tr>
                            <th>IDENTIFIANT</th>
                            <th>NOM</th>
                            <th>PRENOM</th>
                            <th>NAISSANCE</th>
                            <th>ADRESSE</th>
                            <th>TELEPHONE</th>
                            <th>EMAIL</th>
                        </tr>
                        <tr>
                            <?php
                                while($ligne = $result->fetch()){
                                    echo "<tr>
                                            <td>$ligne[0]</td>
                                            <td>$ligne[1]</td>
                                            <td>$ligne[2]</td>
                                            <td>$ligne[3]</td>
                                            <td>$ligne[4]</td>
                                            <td>$ligne[5]</td>
                                            <td>$ligne[6]</td>
                                        </tr>";
                                }
                            ?>
                        </tr> 
                    </table>
                </div> 
            </div>
            <div class="col-2"></div>
        </div>
    </div>
    <footer>
    
    </footer>

    <script src="../js/jquery-3.5.1.min.js"></script>
    <script src="../bootstrap/js/bootstrap.bundle.min.js"></script>
	<script src="../simplon/js/app1.js"></script>
</body>

</html>
