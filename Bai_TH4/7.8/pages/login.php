<?php
    $usernameCookie = "";
    $passwordCookie="";
    if(isset($_COOKIE['username'])) {
        $usernameCookie = $_COOKIE['username'];
        $passwordCookie = $_COOKIE['password'];
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="http://localhost/PHP-7.8/css/index.css">
    <style>

    </style>
</head>

<body>
    <div class="login-container">
        <h3>
            <b>Login Form</b>
        </h3>
        <form method="POST" action="<?php
        echo htmlspecialchars($_SERVER['PHP_SELF']);
    ?>" class="row">
            <div class="form-group col-12">
                <label for="">Username:</label>
                <input type="text" class="form-control" name="username_login" value="<?=$usernameCookie?>" />
            </div>
            <div class="form-group col-12 mb-3">
                <label for="">Password:</label>
                <input type="password" class="form-control" name="password_login" value="<?=$passwordCookie?>" />
            </div>
            <div>
                <input type="submit" class="btn btn-primary col-3" name="submit_login" value="Đăng Nhập" />
                <input type="submit" class="btn btn-warning col-3" name="submit_reset" value="Nhập Lại" />
            </div>

        </form>
    </div>


</body>

</html>