<?php
include_once "init.php";
?>
<?php $thispage="form.php";?>
<!DOCTYPE html>
<html>
<head>
    <title>Reserva - Blue Beach</title>
   <?php include_once "head.php";?>
</head>
<header>
    <?php $thispage="form.php?complex=" . $_GET["complex"];?>
    <?php include_once "header.php"; ?>
    <?php include_once "textos2.php"; ?>
</header>
<body>
<br/>
<div class="main">
<div class="container" style="min-height: 800px">
    <form class="col" method="post" action="process.php">
        <div class="row">
            <h2><?php echo $textos["solicitud"][$lang];?></h2>
        </div>
        <div class="row">
            <div class="input-field col s12 m6">
                <input name="first_name" id="first_name" type="text" class="validate" required>
                <label for="first_name"> <?php echo $textos["nombre"][$lang];?></label>
            </div>
            <div class="input-field col s12 m6">
                <input name="last_name" id="last_name" type="text" class="validate" required>
                <label for="last_name"> <?php echo $textos["apellido"][$lang];?></label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12 m6">
                <input name="email1" id="email" type="email" class="validate" required>
                <label for="email"> <?php echo $textos["email"][$lang];?></label>
            </div>


            <div class="input-field col s12 m6">
                <input name="telf"  id="telf" type="tel" class="validate" value="">
                <label for="telf"> <?php echo $textos["telefono"][$lang];?></label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col m6 s12">
                <p><?php echo $textos["entrada"][$lang];?></p>
                <input name="entrada" id="entrada" type="date" required>
                <label for="entrada"> <?php //echo $textos["entrada"][$lang];?></label>
            </div>
            <div class="input-field col m6 s12">
                <p><?php echo $textos["salida"][$lang];?></p>
                <input name="salida" id="salida" type="date" required>
                <label for="salida"></label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12 m4">
                <input name="adultos" id="adultos" type="number" class="validate" required min="1">
                <label for="adultos"> <?php echo $textos["adultos"][$lang];?></label>
            </div>
            <div class="input-field col s12 m4">
                <input name="inf" id="inf" type="number" class="validate" value="0" min="0">
                <label for="inf"> <?php echo $textos["bebe"][$lang];?></label>
            </div>
            <div class="input-field col s12 m4">
                <select class="validate" name="hab" required>
                    <option value="" disabled selected> <?php echo $textos["nhab"][$lang];?></option>
                    <option value="1" <?php if($_GET["complex"] != "bb1"){echo "disabled";}?>>1 <?php if($_GET["complex"] != "bb1"){echo $textos["solobb1"][$lang];}?> </option>
                    <option value="2" <?php if($_GET["complex"] != "bb2"){echo "disabled";}?>>2 <?php if($_GET["complex"] != "bb2"){echo $textos["solobb2"][$lang];}?> </option>
                    <option value="3" <?php if($_GET["complex"] != "bb2"){echo "disabled";}?>>3 <?php if($_GET["complex"] != "bb2"){echo $textos["solobb2"][$lang];}?> </option>
                </select>
                <label> <?php echo $textos["nhab"][$lang];?></label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12">
                <textarea id="observaciones" name="observaciones" class="materialize-textarea"></textarea>
                <label for="observaciones"> <?php echo $textos["observaciones"][$lang];?></label>
            </div>
        </div>
        <input type="hidden" name="page" value="form1">
        <div class="row">
            <div class="input-field col s12 center">
                <input type="checkbox" id="terminos" required class="validate"/>
                <label for="terminos"> <a href="legal.php"><?php echo $textos["terminos"][$lang];?></a> </label>
            </div>
        </div>
        <div class="center" style="margin: 30px">
            <button class="btn waves-effect blue" type="submit"><?php echo $textos["enviar"][$lang];?><i class="material-icons right">send</i> </button>
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