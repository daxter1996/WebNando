<?php
//if (!isset($_POST['submit'])) {
//    header("Location: index.php");
//    exit();
//}
if(empty($_COOKIE["langcookie"])){ setcookie("langcookie","es");}


?>
<?php $thispage="form2.php";
$datos=json_decode($_GET['datos']);
print_r($datos);
$mensajeAceptar="Aquest seria es missatge pregrabat de aceptacio que es editable";
$mensajeRechazar="Aquest seria es missatge pregrabat de denegacio que es editable";
?>
<!DOCTYPE html>
<html>
<head>
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
                <h2><?php echo $_GET['submit']?> de reserva</h2>
            </div>
            <div class="row">
                <div class="input-field col s12 m6">
                    <input name="first_name" id="first_name" type="text" class="validate" disabled value="<?php echo $datos['first_name']?>">
                    <label for="first_name">Nombre</label>
                </div>
                <div class="input-field col s12 m6">
                    <input name="last_name" id="last_name" type="text" class="validate" value="<?php echo $datos['last_name']?>">
                    <label for="last_name">Apellidos</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12 m6">
                    <input name="email" id="email" type="email" class="validate" value="<?php echo $datos['email']?>">
                    <label for="email">Email</label>
                </div>


                <div class="input-field col s12 m6">
                    <input name="telf"  id="telf" type="tel" class="validate" value="<?php echo $datos['telf']?>">
                    <label for="telf">Telefono</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col m6 s12">
                    <input name="entrada" id="entrada" type="text" value="<?php echo $datos['entrada']?>">
                    <label for="entrada">Dia de entrada</label>
                </div>
                <div class="input-field col m6 s12">
                    <input name="salida" id="salida" type="text"  value="<?php echo $datos['salida']?>">
                    <label for="salida">Dia de salida</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12 m4">
                    <input name="adultos" id="adultos" type="text" class="validate" value="<?php echo $datos['adultos']?>">
                    <label for="adultos">Adultos</label>
                </div>
                <div class="input-field col s12 m4">
                    <input name="inf" id="inf" type="text" class="validate" value="<?php echo $datos['inf']?>">
                    <label for="inf">Bebe (0-3 años)</label>
                </div>
                <div class="input-field col s12 m4">
                    <div class="input-field col s12 m4">
                        <input name="hab" id="hab" type="text" class="validate" value="<?php echo $datos['hab']?>">
                        <label for="hab">Habitaciones</label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                    <textarea id="mensaje" name="mensaje" class="materialize-textarea"><?php if($_GET['submit']=='Aceptar') echo $mensajeAceptar; else echo $mensajeRechazar;?></textarea>
                    <label for="mensaje">Mensaje a enviar:</label>
                </div>
            </div>
            <input type="hidden" name="page" value="form2">
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