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
            Conjunto de apartamentos de dos y tres habitaciones.
        </p>
        <p>
            <a class="waves-effect waves-light btn blue">Consulta Disponibilidad <i class="material-icons right">book</i></a>
        </p>
    </div>
</div>

<div class="parallax-container">
    <div class="parallax"><img src="img/blue_beach_2/parallax2.jpg"></div>
</div>

<div class="section white">
    <div class="row container">
        <h2 class="header">Dos habitaciones </h2>
        <div class="col m12">
            <p class="grey-text text-darken-3 lighten-3">
                <ul class="collapsible popout" data-collapsible="accordion">
                    <li>
                        <div class="collapsible-header"><i class="material-icons">hotel</i>Habitaciones</div>
                        <div class="collapsible-body">
                            <ul>
                                <li>Una habitacion</li>
                                <li>Cama de 160cm con colchón de gran calidad</li>
                                <li>Cuna opcional</li>
                                <li>Sofá cama en sala para una persona</li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <div class="collapsible-header"><i class="material-icons">kitchen</i>Cocina</div>
                        <div class="collapsible-body">
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
            </li>
            <li>
                <div class="collapsible-header"><i class="material-icons">hot_tub</i>Baño</div>
                <div class="collapsible-body">
                    <ul>
                        <li>Secador de Pelo</li>
                        <li>Espejo de Maquillage</li>
                        <li>Bañera</li>
                    </ul>
                </div>
            </li>
            </p>
        </div>
        <a href="galeriab2.php" class="waves-effect waves-light btn blue">Galeria<i class="material-icons right">insert_photo</i></a>
    </div>
</div>


<div class="parallax-container">
    <div class="parallax"><img src="img/blue_beach_2/parallax3.jpg"></div>
</div>

<div class="section white">
    <div class="row container">
        <h2 class="header">Tres habitaciones</h2>
        <div class="col m12">
            <p class="grey-text text-darken-3 lighten-3">
                <ul class="collapsible popout" data-collapsible="accordion">
                    <li>
                        <div class="collapsible-header"><i class="material-icons">hotel</i>Habitaciones</div>
                        <div class="collapsible-body">
                            <ul>
                                <li>Una habitacion</li>
                                <li>Cama de 160cm con colchón de gran calidad</li>
                                <li>Cuna opcional</li>
                                <li>Sofá cama en sala para una persona</li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <div class="collapsible-header"><i class="material-icons">kitchen</i>Cocina</div>
                        <div class="collapsible-body">
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
                    </li>
                    <li>
                        <div class="collapsible-header"><i class="material-icons">hot_tub</i>Baño</div>
                        <div class="collapsible-body">
                            <ul>
                                <li>Secador de Pelo</li>
                                <li>Espejo de Maquillage</li>
                                <li>Bañera</li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </p>
        </div>
    <a href="galeriab2.php" class="waves-effect waves-light btn blue">Galeria<i class="material-icons right">insert_photo</i></a>
    </div>
</div>

<div class="parallax-container">
    <div class="parallax"><img src="img/blue_beach_2/parallax4.jpg"></div>
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