<?php
if (!isset($_REQUIRE['page'])) {
    header("Location: index.php");
    exit();
} else {
 echo $_POST['page'];
}