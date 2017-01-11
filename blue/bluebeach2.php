<?php
include_once "init.php";
?>
<!DOCTYPE html>
<html>
<head>
    <title>Blue Beach 2</title>
    <?php include_once "head.php";?>
</head>
<header>
    <?php $thispage="bluebeach2.php";?>
    <?php include_once "header.php"; ?>
</header>
<body>

<div class="parallax-container">
    <div class="parallax "><img src="img/blue_beach_2/parallax1.jpg"></div>
</div>

<div class="section white">
    <div class="row container">
        <h2 class="header">Blue Beach 2</h2>
        <p class="grey-text text-darken-3 lighten-3">
            <?php
            echo $textos["infobb2"][$lang];
            ?>
        </p>
        <p>
        <p><a href="form.php" class="waves-effect waves-light btn blue"><?php echo $textos["botoReserva"][$lang];?> <i class="material-icons right">drafts</i></a></p>
        <p><a href="galeriab2.php" class="waves-effect waves-light btn blue"><?php echo $textos["botoGaleria"][$lang];?> <i class="material-icons right">insert_photo</i></a></p>
        </p>
    </div>
</div>

<div class="parallax-container">
    <div class="parallax"><img class="ocult" src="img/blue_beach_2/parallax2.jpg"></div>
</div>

<div class="section white">
    <div class="row container">
        <h2 class="header"><?php echo $textos["doshabit"][$lang];?></h2>
        <div class="row z-depth-1">
            <div class="offset-m1 col s12">
                <ul class="tabs">
                    <li class="tab col s3"><a class="active" href="#test1"><?php echo $textos["habitaciones"][$lang];?></a></li>
                    <li class="tab col s3"><a href="#test2"><?php echo $textos["cocina"][$lang];?></a></li>
                    <li class="tab col s3"><a href="#test3"><?php echo $textos["bano"][$lang];?></a></li>
                </ul>
            </div>
            <div id="test1" class="col s12">
                <p>
                    <?php echo $textos["hab2info"][$lang];?>
                </p>
            </div>
            <div id="test2" class="col s12">
                <p>
                    <?php echo $textos["hab2cocinainfo"][$lang];?>
                </p>
            </div>
            <div id="test3" class="col s12">
                <p>
                    <?php echo $textos["hab2banoinfo"][$lang];?>
                </p>
            </div>
        </div>
    </div>
</div>

<div class="parallax-container">
    <div class="parallax"><img class="ocult" src="img/blue_beach_2/parallax3.jpg"></div>
</div>

<div class="section white">
    <div class="row container">
        <h2 class="header"><?php echo $textos["treshabit"][$lang];?></h2>
        <div class="row z-depth-1">
            <div class="offset-m1 col s12">
                <ul class="tabs">
                    <li class="tab col s3"><a class="active" href="#test11"><?php echo $textos["habitaciones"][$lang];?></a></li>
                    <li class="tab col s3"><a href="#test12"><?php echo $textos["cocina"][$lang];?></a></li>
                    <li class="tab col s3"><a href="#test13"><?php echo $textos["bano"][$lang];?></a></li>
                </ul>
            </div>
            <div id="test11" class="col s12">
                <p>
                    <?php echo $textos["hab3info"][$lang];?>
                </p>
            </div>
            <div id="test12" class="col s12">
                <p>
                    <?php echo $textos["hab2cocinainfo"][$lang];?>
                </p>
            </div>
            <div id="test13" class="col s12">
                <p>
                    <?php echo $textos["hab2banoinfo"][$lang];?>
                </p>
            </div>
        </div>
    </div>
</div>

<div class="parallax-container">
    <div class="parallax"><img src="img/blue_beach_2/parallax4.jpg"></div>
</div>

<div class="section white">
    <div class="row container">
        <h2 class="header"><?php echo $textos["video"][$lang];?></h2>
        <p class="grey-text text-darken-3 lighten-3"><iframe src="https://player.vimeo.com/video/122454103" class=" offset-m1 col m10 s12" height="400" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe></p>
    </div>
</div>

<div class="parallax-container">
    <div class="parallax"><img src="img/blue_beach_2/parallax5.jpg"></div>
</div>

<div class="section white">
    <div class="row container">
        <h2 class="header"><?php echo $textos["localicacion"][$_COOKIE["langcookie"]];?></h2>
        <p class="grey-text text-darken-3 lighten-3"> <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d764.0118363917348!2d3.80707282925118!3d40.007389998713414!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12be06b6f2b02951%3A0x93ce6005d8434d97!2sUb+Cala+Picas%2C+415%2C+07769+Cala+en+Blanes%2C+Illes+Balears!5e0!3m2!1ses!2ses!4v1479806702337" class="col s12" height="350" frameborder="0" style="border:0" allowfullscreen></iframe></p>
    </div>
</div>
<!--Import jQuery before materialize.js-->
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="js/materialize.min.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
        $('.parallax').parallax();
    });
</script>

</body>
<?php include_once "footer.php"; ?>
</html>

