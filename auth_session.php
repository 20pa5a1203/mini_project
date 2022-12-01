<?php
    session_start();
    if(!isset($_SESSION["username"])) {
        header("Location: login.php");
        exit();

    }
?>
<html>
    <p>hi</p>
</html>