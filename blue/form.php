<?php
if(empty($_COOKIE["langcookie"])){ setcookie("langcookie","es");
}

?>
<?php $thispage="index.php";?>
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
            <h2>Formulario de reserva</h2>
        </div>
        <div class="row">
            <div class="input-field col s12 m6">
                <input id="first_name" type="text" class="validate" required>
                <label for="first_name">Nombre</label>
            </div>
            <div class="input-field col s12 m6">
                <input id="last_name" type="text" class="validate" required>
                <label for="last_name">Apellidos</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12 m6">
                <input id="email" type="email" class="validate" required>
                <label for="email">Email</label>
            </div>


            <div class="input-field col s12 m6">
                <input id="telf" type="tel" class="validate">
                <label for="telf">Telefono</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col m6 s12">
                <input id="entrada" type="date" class="datepicker" required>
                <label for="entrada">Dia de entrada</label>
            </div>
            <div class="input-field col m6 s12">
                <input id="entrada" type="date" class="datepicker" required>
                <label for="entrada">Dia de entrada</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12 m4">
                <input id="adultos" type="number" class="validate" required>
                <label for="adultos">Adultos</label>
            </div>
            <div class="input-field col s12 m4">
                <input id="inf" type="number" class="validate">
                <label for="inf">Bebe (0-3 años)</label>
            </div>
            <div class="input-field col s12 m4">
                <select class="validate" required>
                    <option value="" disabled selected>Numero de habitaciones</option>
                    <option value="1">1 Habitacion</option>
                    <option value="2">2 Habitaciones</option>
                    <option value="3">3 Habitaciones</option>
                </select>
                <label>Numero de habitaciones</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12">
                <textarea id="textarea1" class="materialize-textarea"></textarea>
                <label for="textarea1">Observaciones</label>
            </div>
        </div>
        <input type="hidden" id="page" value="form1">
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