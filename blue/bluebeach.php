<!DOCTYPE html>
<html>
<head>
    <!--Import Google Icon Font-->
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.css"  media="screen,projection"/>
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<header>
    <?php setcookie("name","langcookie",time()+9999);?>
    <?php include_once "header.php"; ?>
</header>
<body>

<div class="parallax-container">
    <div class="parallax"><img src="img/blue_beach/parallax1.jpg" ></div>
</div>

<div class="section white">
    <div class="row container">
        <h2 class="header">Blue Beach</h2>
        <p class="grey-text text-darken-3 lighten-3">
            Apartamento con terraza individual, aire acondicionado y calefaccion,
            wifi gratis, caja fuerte gratuita, piscina comunitaria con ducha y tumbonas.
        </p>
        <p>
            <a href="#" class="waves-effect waves-light btn blue">Reserva <i class="material-icons right">drafts</i></a>
            <a href="galeriab1.php" class="waves-effect waves-light btn blue">Galeria<i class="material-icons right">insert_photo</i></a>
        </p>
    </div>
</div>

<div class="parallax-container">
    <div class="parallax"><img src="img/blue_beach/parallax2.jpg"></div>
</div>

<div class="section white">
    <div class="row container">
        <h3 class="header">Descripcción</h3>
        <p class="grey-text text-darken-3 lighten-3">
            <ul class="tabs">
                <li class="tab col s3"><a href="#habitacion">Habitaciones</a></li>
                <li class="tab col s3"><a href="#cocina">Cocina</a></li>
                <li class="tab col s3"><a href="#baño">Baño</a></li>
            </ul>
            <div id="habitacion" class="col s12">
                <p>
                    <ul>
                        <li>Una habitacion</li>
                        <li>Cama de 160cm con colchón de gran calidad</li>
                        <li>Cuna opcional</li>
                        <li>Sofá cama en sala para una persona</li>
                    </ul>
                </p>
            </div>
            <div id="cocina" class="col s12">
                <p>
                    <ul>
                        <li>Cocina eléctrica completa con menaje</li>
                        <li>Frigorífico</li>
                        <li>Tostadora</li>
                        <li>Microondas</li>
                        <li>Cafetera</li>
                        <li>Hervidor de Agua</li>
                    </ul>
                </p>
            </div>
            <div id="baño" class="col s12">
                <p>
                    <ul>
                        <li>Secador de Pelo</li>
                        <li>Espejo de Maquillage</li>
                        <li>Bañera</li>
                    </ul>
                </p>
            </div>
        </p>
    </div>
</div>

<div class="parallax-container">
    <div class="parallax"><img src="img/blue_beach/parallax3.jpg"></div>
</div>

<div class="section white">
    <div class="row container">
        <h2 class="header">Localicacion</h2>
        <p class="grey-text text-darken-3 lighten-3"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1528.1834070631671!2d3.8000322866211014!3d40.000253328653216!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x1bf60a23440a7f23!2sBlue+Beach+Menorca+Apartamentos!5e0!3m2!1ses!2ses!4v1479805372714" class="col s12" height="350" frameborder="0" style="border:0" allowfullscreen></iframe></p>
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