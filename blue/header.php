<nav>
    <div class="nav-wrapper blue" style="box-shadow: 0px 15px 37px -2px rgba(0,0,0,0.3);">
        <a href="index.php" class="brand-logo left"><img src="img/logoh.jpg" style="height: 70px;"></a>
        <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
        <ul id="nav-mobile" class="right ">
            <li><a href="<?php echo $thispage?>" target="_self" onclick="updatecookie('es')"><img class="img-navegacio" src="img/esp.png"/> </a></li>
            <li><a href="<?php echo $thispage?>" target="_self" onclick="updatecookie('en')"><img class="img-navegacio" src="img/eng.jpg"/></a></li>
            <li><a href="<?php echo $thispage?>" target="_self" onclick="updatecookie('fr')"><img class="img-navegacio" src="img/fr.jpg"/></a></li>
            <li><a href="<?php echo $thispage?>" target="_self" onclick="updatecookie('it')"><img class="img-navegacio" src="img/it.png"/></a></li>
            <li><a href="<?php echo $thispage?>" target="_self" onclick="updatecookie('de')"><img class="img-navegacio" src="img/de.png"/></a></li>
        </ul>
    </div>
    <script>
        function updatecookie(lang) {
            switch (lang){
                case "es": document.cookie="langcookie=es";
                    break;
                case "en": document.cookie="langcookie=en";
                    break;
                case "fr": document.cookie="langcookie=fr";
                    break;
                case "it": document.cookie="langcookie=it";
                    break;
                case "de": document.cookie="langcookie=de";
                    break;
            }

        }
    </script>
</nav>
