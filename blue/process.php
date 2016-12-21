<?php
if (!isset($_POST['page'])) {
    header("Location: index.php");
    exit();
} else {
 echo $_POST['page'];
}