<?php
if(empty($_COOKIE["langcookie"])){ setcookie("langcookie","es");
}
?>
<!DOCTYPE html>
<html>
<head>
    <?php include_once "head.php";?>
</head>
<header>
    <?php $thispage="bluebeach.php";?>
    <?php include_once "header.php"; ?>
</header>
<body>

<div class="parallax-container">
    <div class="parallax "><img src="img/blue_beach/parallax1.jpg"></div>
</div>

<div class="section white">
    <div class="row container">
        <h2 class="header">Blue Beach</h2>
        <p class="grey-text text-darken-3 lighten-3">
            <?php
                echo $textos["infobb1"][$_COOKIE["langcookie"]];
            ?>
        </p>
        <p>
            <a href="form.php" class="waves-effect waves-light btn blue"><?php echo $textos["botoReserva"][$_COOKIE["langcookie"]];?> <i class="material-icons right">drafts</i></a>
            <a href="galeriab1.php" class="waves-effect waves-light btn blue"><?php echo $textos["botoGaleria"][$_COOKIE["langcookie"]];?> <i class="material-icons right">insert_photo</i></a>
        </p>
    </div>
</div>

<div class="parallax-container">
    <div class="parallax"><img class="ocult" src="img/blue_beach/parallax2.jpg"></div>
</div>

<div class="section white">
    <div class="row container">
        <h2 class="header"><?php echo $textos["descripccion"][$_COOKIE["langcookie"]];?></h2>
        <div class="row z-depth-1">
            <div class="offset-m1 col s12">
                <ul class="tabs">
                    <li class="tab col s3"><a class="active" href="#test1"><?php echo $textos["habitaciones"][$_COOKIE["langcookie"]];?></a></li>
                    <li class="tab col s3"><a href="#test2"><?php echo $textos["cocina"][$_COOKIE["langcookie"]];?></a></li>
                    <li class="tab col s3"><a href="#test3"><?php echo $textos["bano"][$_COOKIE["langcookie"]];?></a></li>
                </ul>
            </div>
            <div id="test1" class="col s12">
                <p>
                    <?php echo $textos["habitacionesinfo"][$_COOKIE["langcookie"]];?>
                </p>
            </div>
            <div id="test2" class="col s12">
                <p>
                    <?php echo $textos["cocinainfo"][$_COOKIE["langcookie"]];?>
                </p>
            </div>
            <div id="test3" class="col s12">
                <p>
                    <?php echo $textos["banoinfo"][$_COOKIE["langcookie"]];?>
                </p>
            </div>
        </div>
    </div>
</div>

<div class="parallax-container">
    <div class="parallax"><img src="img/blue_beach/parallax3.jpg"></div>
</div>

<div class="section white">
    <div class="row container">
        <h2 class="header"><?php echo $textos["video"][$_COOKIE["langcookie"]];?></h2>
        <p class="grey-text text-darken-3 lighten-3"><iframe src="https://player.vimeo.com/video/122454103" class=" offset-m1 col m10 s12" height="400" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe></p>
    </div>
</div>

<div class="parallax-container">
    <div class="parallax"><img src="img/blue_beach/parallax3.jpg"></div>
</div>

<div class="section white">
    <div class="row container">
        <h2 class="header"><?php echo $textos["localicacion"][$_COOKIE["langcookie"]];?></h2>
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