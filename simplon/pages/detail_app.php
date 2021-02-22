<?php
    
    require_once 'connexion.php';

    $id = $_GET['id'];
    $result = $db->prepare("SELECT * FROM liste WHERE id=?");
    $result->execute(array($id));
    $ligne = $result->fetch();

?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>S'enregistrer</title>
    <link rel="stylesheet" href="../styles/enregistrer.css">
    <link rel="shortcut icon" href="../img/logo.png" type="image/x-icon">
	<link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
	<link href="//fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,700,700i" rel="stylesheet">
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-white ">
            <a class="navbar-brand " href="../index.html"><img src="../img/Ssimplon png.png" alt="" height="100px" width="100px"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
          
            <div class="collapse navbar-collapse justify-content-end gauche" id="navbarSupportedContent">
             <div class="">
                <ul class="navbar-nav">
                    <li class="nav-item ">
                        <a class="nav-link mr-5 font-weight-bold text-danger" href="../index.php"> <span class="pointer">ACCEUIL</span> </a>
                      </li>
                    <li class="nav-item ">
                      <a class="nav-link ecart1 font-weight-bold text-danger" href="../pages/enregister.php">S'ENREGISTRER</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link ecart2 font-weight-bold text-danger" href="../pages/liste_apprenants.php">LISTE</a>
					  </li>
					  <li class="nav-item ">
                      <a class="nav-link ecart1 font-weight-bold text-danger" href="../pages/recherche.php">RECHERCHER</a>
                    </li>
                  </ul>
             </div>
              </form>
            </div>
          </nav>
    </header>
	<!-- main -->

	<div class="main-w3layouts wrapper">
		<h1 class="font-weight-bold">Voici les détails de l'apprenant <?= $ligne['NOM'] ." ". $ligne['PRENOM']; ?></h1>
		<div class="text-center">
        <ul>
            <li class="font-weight-bold text-white">ID : <?= $ligne['id'] ?></li>
            <li class="font-weight-bold text-white">NOM: <?= $ligne['NOM'] ?></li>
            <li class="font-weight-bold text-white">PRENOM : <?= $ligne['PRENOM'] ?></li>
            <li class="font-weight-bold text-white">NAISSANCE : <?= $ligne['NAISSANCE'] ?></li>
            <li class="font-weight-bold text-white">ADRESSE : <?= $ligne['ADRESSE'] ?></li>
            <li class="font-weight-bold text-white">TELEPHONE : <?= $ligne['TELEPHONE'] ?></li>
            <li class="font-weight-bold text-white">EMAIL : <?= $ligne['EMAIL'] ?></li>
        </ul>
				<p><a href="liste_apprenants.php" class="list-unstyled btn btn-light font-weight-bold"> RETOUR</a></p>
			</div>
		</div>
  
		<!-- copyright -->
		<div class="colorlibcopy-agile">
			<p>© Copyright 2021.| Design by Groupe 5</p>
		</div>
		<!-- //copyright -->
		<ul class="colorlib-bubbles">
		   
		</ul>
    </div>
    
	<!-- //main -->
	<script type="application/x-javascript"> addEventListener("load", function() 
	{ setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
</body>
</html>
   <script src="../js/jquery-3.5.1.min.js"></script>
   <script src="../bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="js/app1.js" ></script>
</body>
</html>

