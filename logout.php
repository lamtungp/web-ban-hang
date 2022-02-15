<?php
    session_start();
    if(isset($_SESSION["username"])) {
        unset($_SESSION["username"]);
        session_destroy();
    }
    if (isset($_COOKIE["name"])) {
        setcookie("name", "", time()-3600, "/");
    }
    header("location:login.php");
?>