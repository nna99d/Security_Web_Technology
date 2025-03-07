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
    <link rel="stylesheet" href="http://localhost/PHP-7.12/css/center.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <div class="contact-container">
        <form action="" method="POST" class="row">
            <div class="form-group mb-3">
                <label for=""><?php echo(FULLNAME)?></label>
                <input class="form-control" type="text"/>
            </div>
            <div class="form-group mb-3">
                <label for=""><?php echo(BIRTHDAY)?></label>
                <input class="form-control" type="text"/>
            </div>
            <div class="form-group mb-3">
                <label for=""><?php echo(ADDRESS)?></label>
                <input class="form-control" type="text"/>
            </div>
            <div class="form-group mb-3">
                <label for=""><?php echo(MAIL)?></label>
                <input class="form-control" type="text"/>
            </div>
            <div class="form-group mb-3">
                <label for=""><?php echo(PHONE)?></label>
                <input class="form-control" type="text"/>
            </div>
            <div class="form-group mb-3">
                <label for=""><?php echo(NOTE)?></label>
                <textarea class="form-control" type="text"></textarea>
            </div>
            <div class="form-group mb-3">
                <button class="btn btn-primary"><?php echo(RESET)?></button>
                <button class="btn btn-danger"><?php echo(SUBMIT)?></button>
            </div>
        </form>
    </div>
</body>
</html>