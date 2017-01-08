<?php
//if (!isset($_POST['submit'])) {
//    header("Location: index.php");
//    exit();
//}

include_once "huesped.php";

?>
<?php
include_once "init.php";
?>
<?php $thispage="form3.php";
$datos=[];
$datos=json_decode(($_GET['datos']),true);

?>
<!DOCTYPE html>
<html>
<head>
    <title>Confirmacion Reserva - Blue Beach</title>
    <?php include_once "head.php";?>
</head>
<header>
    <?php include_once "header.php"; ?>
</header>
<body>
<br/>
<div class="main">
    <div class="container" style="min-height: 800px">
        <form class="col" method="post" action="process.php">
            <div class="row">
                <h2>Confirmacion de Reserva</h2>
            </div>
            <div class="row">
                <div >
                    <h4><?php echo $textos["nombre"][$lang];?>: <?php echo $datos['first_name']?></h4>
                </div>
                <div >
                    <h4><?php echo $textos["apellido"][$lang];?>: <?php echo $datos['last_name']?></h4>
                </div>
            </div>
            <div class="row">
                <div >
                    <h4><?php echo $textos["email"][$lang];?>: <?php echo $datos['email']?></h4>
                </div>


                <div>
                    <h4><?php echo $textos["telefono"][$lang];?>: <?php echo $datos['telf']?></h4>

                </div>
            </div>
            <div class="row">
                <div>
                    <h4><?php echo $textos["entrada"][$lang];?>: <?php echo $datos['entrada']?></h4>

                </div>
                <div >
                    <h4><?php echo $textos["salida"][$lang];?>: <?php echo $datos['salida']?></h4>

                </div>
            </div>
            <div class="row">

                <div class="input-field col s12 m4">
                    <h4><?php echo $textos["nhab"][$lang];?>: <?php echo $datos['hab']?></h4>
                </div>
            </div>
            <?php datoshuesped($datos['adultos'])?>
            <input type="hidden" name="page" value="form3">
            <textarea name="datos" style="display: none"><?php echo $_GET['datos']?></textarea>
            <div class="center">
                <button class="btn waves-effect blue" type="submit">Enviar<i class="material-icons right">send</i> </button>
            </div>
        </form>
    </div>
</div>
<!--Import jQuery before materialize.js-->
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="js/materialize.min.js"></script>
<script type="text/javascript">
    $('.datepicker').pickadate({
        selectMonths: true, // Creates a dropdown to control month
        selectYears: 15 // Creates a dropdown of 15 years to control year
    });
    $(document).ready(function() {
        $('select').material_select();
    });
</script>
<?php include_once "footer.php"; ?>
</body>

</html>