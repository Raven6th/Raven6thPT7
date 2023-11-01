<?php
    include 'session.php';
    $_SESSION = array();
    session_destroy();
    include 'session.php';
    $_SESSION['username'] = "";
    header("Location: index.php");
    exit;
?>