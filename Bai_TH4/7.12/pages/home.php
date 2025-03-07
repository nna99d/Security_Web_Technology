<?php

    if($_SESSION['language'] === "vietnamese") {
        require_once("../languages/vietnamese.php");
    }
    else {
        require_once("../languages/english.php");
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="http://localhost/PHP-7.12/css/index.css">
    <link rel="stylesheet" href="http://localhost/PHP-7.12/css/center.css">

</head>

<body>
    <div class="home-container">
        <?php echo(WELCOME)?>
    </div>
</body>

</html>