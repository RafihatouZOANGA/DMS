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
		<h1 class="font-weight-bold">Veuillez modifier les champs suivants</h1>
		<div class="main-agileinfo">
			<div class="agileits-top ">
				<div class="row">
					<div class="col-4">

					</div>
					<div class="col-4">
						<img src="../menu responsive/maquette/images4.png" width="" height="" alt="">
					</div>
					<div class="col-4">

					</div>
				</div>
    

        <?php
        $bd = new PDO("mysql:host=localhost;dbname=apprenants","root", "");
        $bd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $id = $_GET['id'];
        $result = $bd->prepare("SELECT * FROM liste WHERE id=?");
        $result->execute(array($id));
        $ligne = $result->fetch();
        ?>        

				<form action="update.php" method="POST">
					<input class="text mt-4" type="hidden" name="id" value="<?= $ligne['id']?>">
          <input class="text mt-4" type="text" name="NOM" value="<?= $ligne['NOM'];?>" pattern="[a-zA-Z]{1,}" required="">
					<input class="text mt-4" type="text" name="PRENOM" value="<?= $ligne['PRENOM'];?>" pattern="[a-zA-Z]{1,}" required="">
					<input class="text mt-4" type="date" name="NAISSANCE" value="<?= $ligne['NAISSANCE'];?>" required="">
					<input class="text mt-4" type="text" name="ADRESSE" value="<?= $ligne['ADRESSE'];?>" required="">
					<input class="text mt-4" type="text" name="TELEPHONE" value="<?= $ligne['TELEPHONE'];?>" pattern="[0-9]{1,}" required="">
					<input class="text email" type="email" name="EMAIL" value="<?= $ligne['EMAIL'];?>" required="">
          <button type="submit" class="btn btn-primary"><span>UPDATE</span></button>
				</form>
				<p><a href="liste_apprenants.php" class="list-unstyled btn btn-light font-weight-bold text-dark"> RETOUR</a></p>
			</div>
		</div>
    ?>
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
  
   <script src="../js/jquery-3.5.1.min.js"></script>
   <script src="../bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="js/app1.js" ></script>
</body>
</html>
