<?php
if(empty($_COOKIE["langcookie"])){ setcookie("langcookie","es");
}

?>

<!DOCTYPE html>
<html>
<head>
   <?php include_once "head.php";?>
    <title>Blue Beach</title>
</head>
<header>
    <?php $thispage="index.php";?>
   <?php include_once "header.php"; ?>
</header>
<body>
<div class="imageFons" style="min-height: 800px; height: 100%;">
    <div style="">
        <div class="row transparenciaFons degradatPrincipal center">
            <div class="col s12 m0">
                <img src="img/logo-grande.png" class="responsive-img" style="border-radius: 3px">
            </div>


            <div class="col s12 m4 white-text offset-l1m flow-text" style="padding: 10px; font-weight: 500" >
                <h4><strong class="blueLogo-text text-shadow">Blue Beach</strong></h4>
                <strong class="blueLogo-text text-shadow flow-text" style="font-weight: 500;">Apartamentos</strong>
                <p>I am a very simple card. I am good at containing small bits of information.
                    I am convenient because I require little markup to use effectively.</p>
                <hr>
                <a href="bluebeach.php" class="white-text text-shadow" style="font-weight: 400">MAS INFORMACIÓN</a>
            </div>

            <div class="col s0 m3">
                <img src="img/logo-grande-low.png" class="responsive-img" style="border-radius: 3px">
            </div>

            <div class="col s12 m4 white-text flow-text" style="padding: 10px;font-weight: 500">
                <h4><strong class="blueLogo-text text-shadow">Blue Beach 2</strong></h4>
                <strong class="blueLogo-text text-shadow flow-text" style="font-weight: 500;">Apartamentos</strong>
                <p>I am a very simple card. I am good at containing small bits of information.
                    I am convenient because I require little markup to use effectively.</p>
                <hr>
                <strong><a href="bluebeach2.php" class="white-text text-shadow">MAS INFORMACIÓN</a></strong>
            </div>
        </div>
    </div>
</div>
<!--Import jQuery before materialize.js-->
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="js/materialize.min.js"></script>
</body>
<?php include_once "footer.php"; ?>
</html>