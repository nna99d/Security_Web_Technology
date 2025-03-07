<?php
    session_start();
    $currentPage = "./pagesManage/adminHome.php";
    if(isset($_POST['return-home'])) {
        header('Location: ../index.php');
    }
    if(isset($_POST['admin-home'])) {
        $_SESSION['currentPage'] = './pagesManage/adminHome.php';
    }
    if(isset($_POST['logout'])) {
        header('Location: ../index.php');
    }
    if(isset($_POST['users-manager'])) {
        $_SESSION['currentPage'] = "./pagesManage/users.php";
    }
    if(isset($_POST['categories'])) {
        $_SESSION['currentPage'] = "./pagesManage/category.php";
    }
    if(isset($_POST['products'])) {
        $_SESSION['currentPage'] = "./pagesManage/products.php";    
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="./css/mainAdmin.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <div class="admin-container">
        <div class="header-admin">
            <img class="banner-admin" src="../images/banner-home.jpg" alt="">
        </div>
        <div class="content">
            <div class="content-left">
                <form action="" method="POST">
                    <input class="btn btn-primary" type="submit" name="return-home" value="Return Home" />
                    <input class="btn btn-primary" type="submit" name="admin-home" value="Admin Home" />
                    <input class="btn btn-primary" type="submit" name="logout" value="Logout" />
                    <input class="btn btn-primary" type="submit" name="users-manager" value="UserManage" />
                    <input class="btn btn-primary" type="submit" name="categories" value="Categories" />
                    <input class="btn btn-primary" type="submit" name="products" value="Products" />
                </form>

            </div>
            <div class="content-right">
                <?php require_once isset($_SESSION['currentPage']) ? $_SESSION['currentPage'] : $currentPage;
                
                ?>

            </div>
        </div>
    </div>
</body>

</html>