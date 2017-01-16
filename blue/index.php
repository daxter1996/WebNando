<?php
include_once "init.php";
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
            <a href="bluebeach.php" class="stextColor mtextColor">
                <div class="col s12 m4 white-text-m offset-l1m flow-text" style="padding: 10px; font-weight: 800;" >
                    <h2><strong class="blueLogo-text text-shadow">Blue Beach</strong></h2>
                    <strong class="blueLogo-text text-shadow flow-text" style="font-weight: 500;"><?php echo $textos["apartamentos"][$lang]; ?></strong>
                        <p class="med-min-height">
                            <?php
                                echo $textos["homebb1"][$lang];
                            ?>
                        </p>
                    <a href="bluebeach.php" class=" sombrabotoMobil sombrabotoPc" style="font-weight: 400"><?php echo $textos["masinfo"][$lang]; ?></a>
                    <a href="https://vimeo.com/122454103" class="w sombrabotoMobil sombrabotoPc" target="_blank" style="font-weight: 400"><?php echo $textos["video"][$lang];?></a>
                </div>
            </a>
            <div class="col s0 m3">
                <img src="img/logo-grande-sense-clau.png" class="responsive-img" style="border-radius: 3px">
            </div>
            <div class="col m0 s12"><hr/></div>
            <a href="bluebeach2.php" class="stextColor mtextColor" >
                <div class="col s12 m4 white-text-m flow-text" style="padding: 10px;font-weight: 800">
                    <h2><strong class="blueLogo-text text-shadow">Blue Beach 2</strong></h2>
                    <strong class="blueLogo-text text-shadow flow-text" style="font-weight: 500;"><?php echo $textos["apartamentos"][$lang]; ?></strong>
                        <p class="med-min-height">
                            <?php
                                echo $textos["homebb2"][$lang];
                            ?>
                        </p>
                    <a href="bluebeach2.php" class=" sombrabotoMobil sombrabotoPc" style="font-weight: 400"><?php echo $textos["masinfo"][$lang]; ?></a>
                    <a href="https://www.youtube.com/watch?v=zXMYbGZB9js" class=" sombrabotoMobil sombrabotoPc" target="_blank" style="font-weight: 400"><?php echo $textos["video"][$lang];?></a>
                </div>
            </a>
            <div class="col m0 s12" style="height: 100px">

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