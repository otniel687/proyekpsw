<?php
    session_start();
    $_SESSION['session_email'] ='';
    unset($_SESSION['session_email']);
    session_unset();
    session_destroy();
    header("location:login.php")
?>