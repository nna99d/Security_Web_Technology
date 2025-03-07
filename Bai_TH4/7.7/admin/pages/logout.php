<?php
    session_start();
    session_destroy();
    header('location: http://localhost/PHP-7.7/index.php');
?>