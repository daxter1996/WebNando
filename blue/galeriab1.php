<?php
include_once "init.php";
?>
<?php $thispage="index.php";?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">
<head>
    <title>Galeria - Blue Beach</title>
    <?php include_once "head.php"; ?>
</head>
<header>
    <?php $thispage="galeriab1.php";?>
    <?php include_once "header.php"; ?>
</header>
<body>
<div class="container center">
    <h2>Galeria Blue Beach</h2>
    <div class="row">
        <br/>
        <?php
            foreach (glob("img/blue_beach/galeria/*.jpg") as $item){
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