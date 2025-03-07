<?php
        session_start();
        $pageCenter = './pages/home.php';
        if(isset($_POST["btn_login"])) {
            $pageCenter = './pages/login.php';   
        }
        if(isset($_POST["btn_home"])) {
            $pageCenter = './pages/home.php';   
        }
        if(isset($_POST["submit_reset"])) {
            $pageCenter = './pages/login.php';   
        }
        
        // Check username and password
        $username = "";
        $password = "";
        $checkLogin = true;
        if(isset($_POST['submit_login'])) {
            if(isset($_POST['username_login']) && isset($_POST['password_login'])){
                $username = $_POST['username_login'];
                $password = $_POST['password_login'];
                if($username == "admin" && $password == "admin") {
                    header("Location: ./admin/index.php");
                    $_SESSION['username'] = $username;
                    $_SESSION['password'] = $password;
                    echo "Cookies in PHP";
                    setcookie("username", $username, time() + 24*3600);
                    setcookie("password", $password, time() + 24*3600);
                }
                else {
                    $pageCenter = './pages/login.php'; 
                    $checkLogin = false;
                }
            }
        }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="http://localhost/PHP-7.8/css/index.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <?php include './pages/head.php' ;?>
    <div class="content">
        <?php include './components/left.php' ;?>
        <div class="content-right">
            <?php include $pageCenter;?>
            <?php
                if(!$checkLogin) {
                    echo "<p class='incorrect-text'>Username/Password Incorrect</p>";
                }
            ?>
        </div>
    </div>
    <?php include './components/footer.php' ;?>
</body>

</html>