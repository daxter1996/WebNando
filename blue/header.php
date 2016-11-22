<nav>
    <div class="nav-wrapper blue">
        <a href="index.php" class="brand-logo left"><img src="img/logoh.jpg" style="height: 70px;"></a>
        <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
        <ul id="nav-mobile" class="right ">
            <li><a href="<?php echo $thispage?>" target="_self" onclick="updatecookie("es")"><img class="img-navegacio" src="img/esp.png"/> </a></li>
            <li><a href="<?php echo $thispage?>" target="_self" onclick="<?php setcookie("langcookie","en");?>"><img class="img-navegacio" src="img/eng.jpg"/></a></li>
        </ul>
    </div>
    <script>
        function updatecookie(lang) {
            document.cookie("langcookie=lang");
        }
    </script>
</nav>
