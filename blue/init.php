<?php
if(empty($_COOKIE["langcookie"])){
    $lang="es";
    setcookie("langcookie","es");
}else $lang=$_COOKIE["langcookie"];