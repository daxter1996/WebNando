<?php
if(empty($_COOKIE["langcookie"])){ setcookie("langcookie","es");
}

?>

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
    <?php $thispage="index.php";
   ?>
   <?php include_once "header.php"; ?>
</header>
<body>
<br/>
<div class="row">
    <div class="col s12 m5 offset-m1">
        <div class="card">
            <div class="card-image">
                <img src="img/blue_beach/principal.png">
                <span class="card-title">Blue Beach</span>
            </div>
            <div class="card-content">
                <p>I am a very simple card. I am good at containing small bits of information.
                    I am convenient because I require little markup to use effectively.</p>
            </div>
            <div class="card-action">
                <a href="bluebeach.php">Mas Informacion</a>
            </div>
        </div>
    </div>
    <div class="col s12 m5">
        <div class="card">
            <div class="card-image">
                <img src="img/blue_beach_2/principal.jpg">
                <span class="card-title">Blue Beach 2</span>
            </div>
            <div class="card-content">
                <p>I am a very simple card. I am good at containing small bits of information.
                    I am convenient because I require little markup to use effectively.</p>
            </div>
            <div class="card-action">
                <a href="bluebeach2.php">Mas Informacion</a>
            </div>
        </div>
    </div>
</div>

<!--Import jQuery before materialize.js-->
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="js/materialize.min.js"></script>
</body>
<?php include_once "footer.php"; ?>
</html>