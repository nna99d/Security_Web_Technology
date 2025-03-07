<?php
    $isLogin = true;
    if(empty($_SESSION['username']) || empty($_SESSION['password'])) {       
        $isLogin = false;
    }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="http://localhost/PHP-7.8/css/left.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <?php
        
    ?>
    <div class="left-container">
        <form action="<?php
        echo htmlspecialchars($_SERVER['PHP_SELF']);
    ?>" method="POST">
            <?php
                if(!$isLogin) {
                    echo "<input class='btn btn-primary' type='button'  value='Web Link List' />";
                    echo "<input class='btn btn-secondary' type='button'  value='Logout' />";
                }
                else {
                    echo "<input class='btn btn-primary' type='submit' name='weblinklist' value='Web Link List' />";
                    echo "<input class='btn btn-secondary' type='submit' name='logout' value='Logout' />";
                }
            ?>

        </form>
    </div>

</body>

</html>