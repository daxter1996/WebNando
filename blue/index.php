<?php
if(empty($_COOKIE["langcookie"])){ setcookie("langcookie","es");
}

?>

<!DOCTYPE html>
<html>
<head>
    <link rel="shortcut icon" type="image/png" href="img/favicon.png"/>
    <title>Blue Beach</title>
    <!--Import Google Icon Font-->
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.css"  media="screen,projection"/>

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<header>
    <?php $thispage="index.php";?>
   <?php include_once "header.php"; ?>
</header>
<body>
<div class="imageFons" style="min-height: 800px; height: 100%;">
    <div class="row transparenciaFons degradatPrincipal">
        <div class="col s12 m0">
            <img src="img/logo-grande.png" class="responsive-img" style="border-radius: 3px">
        </div>
        <div class="col s12 m4 offset-l1m flow-text" style="padding: 10px; font-weight: 500" >
            <h4><strong class="blueLogo-text text-shadow">Apartamentos Blue Beach</strong></h4>
            <p>I am a very simple card. I am good at containing small bits of information.
                I am convenient because I require little markup to use effectively.</p>
            <hr>
            <strong><a href="bluebeach.php" class="blueDarken-text text-shadow">MAS INFORMACIÓN</a></strong>
        </div>

        <div class="col s0 m3">
            <img src="img/logo-grande-low.png" class="responsive-img" style="border-radius: 3px">
        </div>

        <div class="col s12 m4 flow-text" style="padding: 10px;font-weight: 500">
            <h4><strong class="blueLogo-text text-shadow">Apartamentos Blue Beach 2</strong></h4>
            <p>I am a very simple card. I am good at containing small bits of information.
                I am convenient because I require little markup to use effectively.</p>
            <hr>
            <strong><a href="bluebeach2.php" class="blueDarken-text text-shadow">MAS INFORMACIÓN</a></strong>
        </div>
    </div>
</div>
<!--Import jQuery before materialize.js-->
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="js/materialize.min.js"></script>
</body>
<?php include_once "footer.php"; ?>
</html>