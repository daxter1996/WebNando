<?php
if(empty($_COOKIE["langcookie"])){ setcookie("langcookie","es");
}

?>
<?php $thispage="form.php";?>
<!DOCTYPE html>
<html>
<head>
   <?php include_once "head.php";?>
</head>
<header>
    <?php $thispage="form.php";?>
    <?php include_once "header.php"; ?>
    <?php include_once "textos.php"; ?>
</header>
<body>
<br/>
<div class="main">
<div class="container" style="min-height: 800px">
    <form class="col" method="post" action="process.php">
        <div class="row">
            <h2><?php echo $textos["solicitud"][$_COOKIE["langcookie"]];?></h2>
        </div>
        <div class="row">
            <div class="input-field col s12 m6">
                <input name="first_name" id="first_name" type="text" class="validate" required>
                <label for="first_name"> <?php echo $textos["nombre"][$_COOKIE["langcookie"]];?></label>
            </div>
            <div class="input-field col s12 m6">
                <input name="last_name" id="last_name" type="text" class="validate" required>
                <label for="last_name"> <?php echo $textos["apellido"][$_COOKIE["langcookie"]];?></label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12 m6">
                <input name="email" id="email" type="email" class="validate" required>
                <label for="email"> <?php echo $textos["email"][$_COOKIE["langcookie"]];?></label>
            </div>


            <div class="input-field col s12 m6">
                <input name="telf"  id="telf" type="tel" class="validate" value="0">
                <label for="telf"> <?php echo $textos["telefono"][$_COOKIE["langcookie"]];?></label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col m6 s12">
                <input name="entrada" id="entrada" type="date" class="datepicker" required>
                <label for="entrada"> <?php echo $textos["entrada"][$_COOKIE["langcookie"]];?></label>
            </div>
            <div class="input-field col m6 s12">
                <input name="salida" id="salida" type="date" class="datepicker" required>
                <label for="salida"> <?php echo $textos["salida"][$_COOKIE["langcookie"]];?></label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12 m4">
                <input name="adultos" id="adultos" type="number" class="validate" required min="1">
                <label for="adultos"> <?php echo $textos["adultos"][$_COOKIE["langcookie"]];?></label>
            </div>
            <div class="input-field col s12 m4">
                <input name="inf" id="inf" type="number" class="validate" value="0" min="0">
                <label for="inf"> <?php echo $textos["bebe"][$_COOKIE["langcookie"]];?></label>
            </div>
            <div class="input-field col s12 m4">
                <select class="validate" name="hab" required>
                    <option value="" disabled selected> <?php echo $textos["nhab"][$_COOKIE["langcookie"]];?></option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                </select>
                <label> <?php echo $textos["nhab"][$_COOKIE["langcookie"]];?></label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12">
                <textarea id="observaciones" name="observaciones" class="materialize-textarea"></textarea>
                <label for="observaciones"> <?php echo $textos["observaciones"][$_COOKIE["langcookie"]];?></label>
            </div>
        </div>
        <input type="hidden" name="page" value="form1">
        <div class="center">
            <button class="btn waves-effect blue" type="submit"><?php echo $textos["enviar"][$_COOKIE["langcookie"]];?><i class="material-icons right">send</i> </button>
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