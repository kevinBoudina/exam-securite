<?php
// Initialiser la session
require('db/phpmyadmin.php');
session_start();
// Vérifiez si l'utilisateur est connecté, sinon redirigez-le vers la page de connexion
if(!isset($_SESSION["Code_ID"])){
    header("Location: Connexion.php");
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="bootstrap/bootstrap-sncf.min.css">
    <!--<link rel="stylesheet alternate" href="bootstrap/bootstrap-sncf.darkmode.min.css">-->

</head>
<body>

<div class="bd-example">
    <div class="mastheader">
        <header role="banner" class="mastheader-title d-none d-xl-block">
            <h1 class="text-uppercase text-white pt-2 pl-3 mb-0">Nom application</h1>
        </header>
        <ul class="mastheader-toolbar toolbar mb-0">
            <li class="toolbar-item separator-gray-500">
                <div class="btn-group dropdown">
                    <button class="btn btn-transparent dropdown-toggle toolbar-item-spacing" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" aria-controls="mycontrol">
                        <i class="icons-menu-account icons-size-1x25 icons-md-size-1x5 mr-xl-2" aria-hidden="true"></i>
                        <span class="d-none d-xl-block"><?php echo $_SESSION['Code_ID']; ?></span>
                        <i class="icons-arrow-down d-none d-xl-block" aria-hidden="true"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton" id="mycontrol">
                        <ul>
                            <li class="dropdown-item"><a href="logout.php">Se déconnecter</a></li>
                        </ul>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</div>

<?php
        if(!empty($_GET['keyword']))
        {
            echo "Résultat(s) pour le mot-clé : ".$_GET['keyword'];
        } 
?>



<div class="mx-auto"  style="width: 200px;margin-top: 200px;">
    <label class="font-weight-medium mb-2">Exemple</label>
    <form type="get" action="">
    <input type="text" name="keyword" />
    <input type="submit" value="Rechercher" />
</form>
</div>


</body>
<script src="bootstrap/bootstrap-sncf.min.js"></script>
</html>