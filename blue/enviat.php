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
<div class="container" >
    <div class="row">
        <div class="col s12 m12 center hide-on-med-and-down"><h2>Mensaje enviado con exito</h2></div>
        <div class="col offset-s1 s9 m5"><img src="img/thumb_up1600.png" class="responsive-img"></div>
        <div class="col s12 m6 center hide-on-med-and-up"><h4>Mensaje enviado con exito</h4></div>
        <div class="col s12 m6 offset-l1"><p>Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una galería de textos y los mezcló de tal manera que logró hacer un libro de textos especimen. No sólo sobrevivió 500 años, sino que tambien ingresó como texto de relleno en documentos electrónicos, quedando esencialmente igual al original. Fue popularizado en los 60s con la creación de las hojas "Letraset", las cuales contenian pasajes de Lorem Ipsum, y más recientemente con software de autoedición, como por ejemplo Aldus PageMaker, el cual incluye versiones de Lorem Ipsum.</p></div>
    </div>
</div>


<!--Import jQuery before materialize.js-->
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="js/materialize.min.js"></script>
</body>
<?php include_once "footer.php"; ?>
</html>