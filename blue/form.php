<?php
if(empty($_COOKIE["langcookie"])){ setcookie("langcookie","es");
}

?>
<?php $thispage="index.php";?>
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
    <?php include_once "header.php"; ?>
</header>
<body>
<br/>
<div class="container">
    <form class="col">
        <div class="row">
            <div class="input-field col s12 m6">
                <input id="first_name" type="text" class="validate">
                <label for="first_name">Nombre</label>
            </div>
            <div class="input-field col s12 m6">
                <input id="last_name" type="text" class="validate">
                <label for="last_name">Apellidos</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12 m6">
                <input id="email" type="email" class="validate">
                <label for="email">Email</label>
            </div>


            <div class="input-field col s12 m6">
                <input id="telf" type="tel" class="validate">
                <label for="telf">Telefono</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col m6 s12">
                <input id="entrada" type="date" class="datepicker">
                <label for="entrada">Dia de entrada</label>
            </div>
            <div class="input-field col m6 s12">
                <input id="entrada" type="date" class="datepicker">
                <label for="entrada">Dia de entrada</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12 m4">
                <input id="adultos" type="number" class="validate">
                <label for="adultos">Adultos</label>
            </div>
            <div class="input-field col s12 m4">
                <input id="inf" type="number" class="validate">
                <label for="inf">Bebe (0-3 años)</label>
            </div>
            <div class="input-field col s12 m4">
                <input id="inf" type="number" class="validate">
                <label for="inf">Habitaciones</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12">
                <textarea id="textarea1" class="materialize-textarea"></textarea>
                <label for="textarea1">Motivo</label>
            </div>
        </div>
        <a class="waves-effect waves-light btn  blue darken-1"><i class="material-icons left">send</i>Enviar</a>
    </form>
</div>
<!--Import jQuery before materialize.js-->
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="js/materialize.min.js"></script>
<script type="text/javascript">
    $('.datepicker').pickadate({
        selectMonths: true, // Creates a dropdown to control month
        selectYears: 15 // Creates a dropdown of 15 years to control year
    });
</script>
</body>
<?php include_once "footer.php"; ?>
</html>