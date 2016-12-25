<?php
if(empty($_COOKIE["langcookie"])){ setcookie("langcookie","es");
}

?>
<?php $thispage="index.php";?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">
<head>
    <!--Import Google Icon Font-->
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.css"  media="screen,projection"/>
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<header>
    <?php $thispage="galeriab2-3.php";?>
    <?php include_once "header.php"; ?>
</header>
<body>
<div class="container center">
    <h2>Galeria Blue Beach 2</h2>
    <strong>Tres Habitaciones</strong>
    <div class="row">
        <br/>
        <?php
        foreach (glob("img/blue_beach/g*.jpg") as $item){
            echo "<img class='materialboxed col m3 s12' style='margin-top: 10px' src=".$item.">";
        }
        ?>
    </div>
</div>
<!--Import jQuery before materialize.js-->
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="js/materialize.min.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
        $('.parallax').parallax();
        $('.materialboxed').materialbox();
    });
</script>

</body>
<?php include_once "footer.php"; ?>
</html>