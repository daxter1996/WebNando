<!DOCTYPE html>
<html>
<head>
    <title>Blue Beach 2</title>
    <!--Import Google Icon Font-->
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.css"  media="screen,projection"/>
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<header>
    <?php $thispage="bluebeach2.php";?>
    <?php include_once "header.php"; ?>
</header>
<body>

<div class="parallax-container">
    <div class="parallax"><img src="img/blue_beach_2/parallax1.jpg" ></div>
</div>

<div class="section white">
    <div class="row container">
        <h3 class="header">Blue Beach 2</h3>
        <p class="grey-text text-darken-3 lighten-3">
            <?php echo $textos["infobb2"][$_COOKIE["langcookie"]];?>
        </p>
        <p>
            <p><a class="waves-effect waves-light btn blue"><?php echo $textos["botoReserva"][$_COOKIE["langcookie"]];?> <i class="material-icons right">book</i></a></p>
        <p><a href="galeriab2.php" class="waves-effect waves-light btn blue"><?php echo $textos["botoGaleria"][$_COOKIE["langcookie"]];?> <i class="material-icons right">insert_photo</i></a></p>
        </p>
    </div>
</div>

<div class="parallax-container">
    <div class="parallax"><img src="img/blue_beach_2/parallax2.jpg"></div>
</div>

<div class="section white">
    <div class="row container">
        <h2 class="header"><?php echo $textos["doshabit"][$_COOKIE["langcookie"]];?></h2>
        <div class="row z-depth-1">
            <div class="col s12">
                <ul class="tabs">
                    <li class="tab col s3"><a class="active" href="#habp1"><?php echo $textos["habitaciones"][$_COOKIE["langcookie"]];?></a></li>
                    <li class="tab col s3"><a href="#cocina1"><?php echo $textos["cocina"][$_COOKIE["langcookie"]];?></a></li>
                    <li class="tab col s3"><a href="#baño1"><?php echo $textos["bano"][$_COOKIE["langcookie"]];?></a></li>
                </ul>
            </div>
            <div id="habp1" class="col s12">
                <p>
                    <?php echo $textos["hab2info"][$_COOKIE["langcookie"]];?>
                </p>
            </div>
            <div id="cocina1" class="col s12">
                <p>
                    <?php echo $textos["hab2cocinainfo"][$_COOKIE["langcookie"]];?>
                </p>
            </div>
            <div id="baño1" class="col s12">
                <p>
                    <?php echo $textos["hab2banoinfo"][$_COOKIE["langcookie"]];?>
                    -Secador de pelo<br/>-Espejo de Maquillaje<br/>-Bañera<br/>
                </p>
            </div>
        </div>
        <a href="galeriab2-2.php" class="waves-effect waves-light btn blue"><?php echo $textos["botoGaleria"][$_COOKIE["langcookie"]];?> <i class="material-icons right">insert_photo</i></a>
    </div>
</div>



<div class="parallax-container">
    <div class="parallax"><img src="img/blue_beach_2/parallax4.jpg"></div>
</div>

<div class="section white">
    <div class="row container">
        <h2 class="header"><?php echo $textos["treshabit"][$_COOKIE["langcookie"]];?></h2>
        <div class="row z-depth-1">
            <div class=" col s12">
                <ul class="tabs">
                    <li class="tab col s3 "><a class="active" href="#habp2">Habitaciones</a></li>
                    <li class="tab col s3 "><a href="#cocina2">Cocina</a></li>
                    <li class="tab col s3 "><a href="#baño2">Baño</a></li>
                </ul>
            </div>
            <div id="habp2" class="col s12">
                <p>
                    <strong>Habitacion Principal</strong><br/>
                    -Cama de 160cm con colchón de gran calidad y armario<br/>
                    -Cuna opcional<br/>
                    <strong>Habitacion nº2</strong><br/>
                    -2 Camas dobles de 90cm con Armario<br/>
                    <strong>Habitacion nº3</strong><br/>
                    -1 cama de 90Cm con Armario
                </p>
            </div>
            <div id="cocina2" class="col s12">
                <p>
                    -Cocina eléctrica completa con menaje<br/>
                    -Frigorífico<br/>
                    -Tostadora<br/>
                    -Microondas<br/>
                    -Hervidor de Agua<br/>
                    -Cafetera<br/>
                </p>
            </div>
            <div id="baño2" class="col s12">
                <p>
                    -Secador de pelo<br/>
                    -Espejo de Maquillaje<br/>
                    -Bañera<br/>
                </p>
            </div>
        </div>
        <a href="galeriab2-2.php" class="waves-effect waves-light btn blue"><?php echo $textos["botoGaleria"][$_COOKIE["langcookie"]];?><i class="material-icons right">insert_photo</i></a>
    </div>
</div>


<div class="parallax-container">
    <div class="parallax"><img src="img/blue_beach_2/parallax5.jpg"></div>
</div>

<div class="section white">
    <div class="row container">
        <h2 class="header">Video</h2>
        <p class="grey-text text-darken-3 lighten-3"><iframe class=" offset-m1 col m10 s12" height="490" src="https://www.youtube.com/embed/zXMYbGZB9js" frameborder="0" allowfullscreen></iframe></p>
    </div>
</div>

<div class="parallax-container">
    <div class="parallax"><img src="img/blue_beach_2/parallax3.jpg"></div>
</div>

<div class="section white">
    <div class="row container">
        <h2 class="header">Localicacion</h2>
        <p class="grey-text text-darken-3 lighten-3"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d764.0118363917348!2d3.80707282925118!3d40.007389998713414!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12be06b6f2b02951%3A0x93ce6005d8434d97!2sUb+Cala+Picas%2C+415%2C+07769+Cala+en+Blanes%2C+Illes+Balears!5e0!3m2!1ses!2ses!4v1479806702337" class="col s12" height="350" frameborder="0" style="border:0" allowfullscreen></iframe></p>
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