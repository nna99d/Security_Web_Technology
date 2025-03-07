<?php
    
    $username = "";
    $password = "";
    if(isset($_SESSION['username']) && isset($_SESSION['password'])) {       
            $username = $_SESSION['username'];
            $password = $_SESSION['password'];
    }
    $isLogin = true;
    if(!isset($_SESSION['username']) || !isset($_SESSION['password'])) {       
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
</head>

<body>
    <div class="admin-home-container">
        <?php
            if(!$isLogin) {
                echo "<p>Chưa đăng nhập</p>";
            }
            else {
                echo "<p>Tên đăng nhập: $username</p>";
                echo "<p>Mật khẩu: $password</p>";
            }
        ?>

    </div>
</body>

</html>