<?php
        session_start();
        $pageCenter = './home.php';
        if(isset($_POST['submit_home'])) {
            $pageCenter = './home.php';
            $_SESSION['page'] = './home.php';
        }
        if(isset($_POST['submit_contact'])) {
            $pageCenter = './contact.php';
            $_SESSION['page'] = './contact.php';
        }
        if(isset($_POST['submit_vietnamese'])) {
            require_once("../languages/vietnamese.php");
            $_SESSION['language'] = "vietnamese";
        }
        if(isset($_POST['submit_english'])) {
            require_once("../languages/english.php");
            $_SESSION['language'] = "english";
        }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="http://localhost/PHP-7.12/css/center.css">
</head>

<body>
    <?php include './head.php' ;?>
    <div class="content">
        <?php include './left.php' ;?>
        <div class="content-right">
            <?php include isset($_SESSION['page']) ? $_SESSION['page'] : $pageCenter ;?>
        </div>
    </div>
    <?php include './footer.php' ;?>
</body>

</html>