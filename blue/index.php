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
            <div class="col s12 m0">
                <img src="img/logo-grande.png" class="responsive-img" style="border-radius: 3px">
            </div>
            <a href="bluebeach.php" style="color:white">
                <div class="col s12 m4 white-text-m offset-l1m flow-text" style="padding: 10px; font-weight: 800;" >
                    <h3><strong class="blueLogo-text text-shadow">Blue Beach</strong></h3>
                    <strong class="blueLogo-text text-shadow flow-text" style="font-weight: 500;"><?php echo $textos["apartamentos"][$lang]; ?></strong>
                        <p style="min-height: 200px">
                            <?php
                                echo $textos["homebb1"][$lang];
                            ?>
                        </p>

                    <hr/>
                    <a href="bluebeach.php" class="white-text-m text-shadow" style="font-weight: 400"><?php echo $textos["masinfo"][$lang]; ?></a>
                    <br/>
                    <strong><a href="https://vimeo.com/122454103" class="white-text-m text-shadow" target="_blank" style="font-weight: 400"><?php echo $textos["video"][$lang];?></a></strong>
                </div>
            </a>
            <div class="col s0 m3">
                <img src="img/logo-grande-sense-clau.png" class="responsive-img" style="border-radius: 3px">
            </div>

            <a href="bluebeach2.php" style="color:white">
                <div class="col s12 m4 white-text-m flow-text" style="padding: 10px;font-weight: 800">
                    <h3><strong class="blueLogo-text text-shadow">Blue Beach 2</strong></h3>
                    <strong class="blueLogo-text text-shadow flow-text" style="font-weight: 500;"><?php echo $textos["apartamentos"][$lang]; ?></strong>
                        <p style="min-height: 200px">
                            <?php
                                echo $textos["homebb2"][$lang];
                            ?>
                        </p>
                    <hr/>
                    <strong><a href="bluebeach2.php" class="white-text-m text-shadow"><?php echo $textos["masinfo"][$lang]; ?></a></strong>
                    <br/>
                    <strong><a href="https://www.youtube.com/watch?v=zXMYbGZB9js" class="white-text-m text-shadow" target="_blank" style="font-weight: 400"><?php echo $textos["video"][$lang];?></a></strong>
                </div>
            </a>
        </div>
    </div>
</div>
<!--Import jQuery before materialize.js-->
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="js/materialize.min.js"></script>
</body>
<?php include_once "footer.php"; ?>
</html>