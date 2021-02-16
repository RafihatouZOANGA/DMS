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
	<title>liste des apprenants</title>
</head>
<body>
	<div>
		<header>
			<nav class="navbar navbar-expand-lg navbar-light bg-white ">
				<a class="navbar-brand simplon " href="index.php"><img src="../img/Ssimplon png.png" alt="" height="100px" width="100px"></a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				  <span class="navbar-toggler-icon"></span>
				</button>
			  
				<div class="collapse navbar-collapse justify-content-end gauche" id="navbarSupportedContent">
				    <div class="">
					    <ul class="navbar-nav">
						    <li class="nav-item ">
							    <a class="nav-link mr-5 font-weight-bold text-danger" href="../index.php">ACCEUIL</a>
						    </li>
						    <li class="nav-item ">
						        <a class="nav-link ecart1 font-weight-bold text-danger" href="../pages/enregister.php">S'ENREGISTRER</a>
						    </li>
						    <li class="nav-item">
							    <a class="nav-link ecart2 font-weight-bold text-danger" href="../pages/recherche.php">RECHERCHER</a>
						    </li>
					    </ul>
				    </div>
				</div>
            </nav> 
		</header>
    </div>

    <?php
        $bd = new PDO("mysql:host=localhost;dbname=apprenants","root", "");
        $bd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $result = $bd->query("SELECT id, NOM, PRENOM, EMAIL FROM liste ORDER BY NOM ASC");

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


        <h4 class="text-center text-danger"><strong>La Liste comprend actuellement <?= $nbre ?> apprenants enregistrés</strong></h4> <br>

	<div class="container-fluid">
        <div class="row">
            <div class="col-2"></div>
            <div class="col-8">
                <div class="liste_tableau">
                    <table width=100%>
                        <tr>
                            <th>ID</th>
                            <th>NOM</th>
                            <th>PRENOM</th>
                            <th>EMAIL</th>
                            <th>ACTION 1</th>
                            <th>ACTION 2</th>
                            <th>ACTION 3</th>
                        </tr>
                        <tr>
                            <?php
                                while($ligne = $result->fetch()){
                                    echo "<tr>
                                            <td>$ligne[0]</td>
                                            <td>$ligne[1]</td>
                                            <td>$ligne[2]</td>
                                            <td>$ligne[3]</td>
                                            <td><a class='btn btn-success' href='details.php?id=$ligne[0]'>Détails</a></td>
                                            <td><a class='btn btn-primary' href='mo.php?id=$ligne[0]'>Modifier</a></td>
                                            <td><a class='btn btn-danger' onclick='return confirm(\"Voulez-vous vraiment supprimer cet apprenant?\")'; href='supprimer.php?id=$ligne[0]'>Supprimer</a></td>
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
    <?php include ('pied.php') ; ?>
    </footer>

    <script src="../js/jquery-3.5.1.min.js"></script>
    <script src="../bootstrap/js/bootstrap.bundle.min.js"></script>
	<script src="../simplon/js/app1.js"></script>
</body>

</html>