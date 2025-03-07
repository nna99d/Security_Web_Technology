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
    <link rel="stylesheet" href="http://localhost/PHP-7.12/css/head.css">



</head>

<body>
    <div class="header-container">
        <img class="img-header" src="http://localhost/PHP-7.12/images/header-small.jpg" alt="">
        <nav class="pages">
            <form method="post" action="http://localhost/PHP-7.12/pages/center.php">
                <input type="submit" value="<?php echo(VIETNAMESE)?>" name="submit_vietnamese">
                <input type="submit" value="<?php echo(ENGLISH)?>" name="submit_english">
            </form>
            <form method="post" action="http://localhost/PHP-7.12/pages/center.php">
                <input type="submit" value="<?php echo(HOME)?>" name="submit_home">
                <input type="submit" value="<?php echo(CONTACT)?>" name="submit_contact">
                <input type="submit" value="<?php echo(INTRODUCTION)?>" name="submit_introduction">
                <input type="submit" value="<?php echo(LOGIN)?>" name="submit_login">
            </form>
        </nav>
    </div>
</body>

</html>