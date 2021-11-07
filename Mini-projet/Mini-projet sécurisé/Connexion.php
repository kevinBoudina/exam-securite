<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="bootstrap/bootstrap-sncf.min.css">
    <!--<link rel="stylesheet alternate" href="bootstrap/bootstrap-sncf.darkmode.min.css">-->
</head>
<body>
<?php
require('db/phpmyadmin.php');
session_start();

if (isset($_POST['Code_ID'])){
    $Code_ID = stripslashes($_REQUEST['Code_ID']);
    $Code_ID = mysqli_real_escape_string($conn, $Code_ID);
    $query = "SELECT * FROM `numid` WHERE Code_ID ='$Code_ID'";
    $result = mysqli_query($conn,$query) or die(mysql_error());
    $rows = mysqli_num_rows($result);
    if($rows==1){
        $_SESSION['Code_ID'] = $Code_ID;
        header("Location: index.php");
    }else{
        $message = "Le numéro d'ID n'est pas reconnu.";
    }
}
?>

<div class="mx-auto"  style="width: 200px;margin-top: 200px;">
        <form class="card overflow-hidden" action="" method="post" name="login">
            <h1 class="box-title">Connexion</h1>
            <input type="text" class="box-input" name="Code_ID" placeholder="Code ID">
            <input type="submit" value="Connexion " name="submit" class="box-button">
            <?php if (! empty($message)) { ?>
                <p class="errorMessage"><?php echo $message; ?></p>
            <?php } ?>
        </form>
</div>
<script src="bootstrap/bootstrap-sncf.min.js"></script>
</body>
</html>