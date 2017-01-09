<?php
include_once "init.php";
?>
<!DOCTYPE html>
<html>
<head>
    <?php include_once "head.php";?>
    <title>Error - Blue Beach</title>
</head>
<header>
    <?php $thispage="index.php";?>
    <?php include_once "header.php"; ?>
</header>
<body>
<div class="container" style="min-height: 600px" >
    <div class="row">
        <div class="col s12 m12 center hide-on-med-and-down"><h2>El mensaje no se ha enviado</h2></div>
        <div class="col center offset-m3 s12 m5"><img src="img/warning.png" class="responsive-img"></div>
        <div class="col s12 m6 center hide-on-med-and-up"><h4>El mensaje no se ha enviado</h4></div>
    </div>
</div>


<!--Import jQuery before materialize.js-->
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="js/materialize.min.js"></script>
</body>
<?php include_once "footer.php"; ?>
</html>