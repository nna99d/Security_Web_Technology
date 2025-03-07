<?php
    session_start();

    require_once ('./configs/database.php');
    mysqli_select_db($connection_obj, DATABASE_NAME);
    $queryGetAllCategory = "SELECT * FROM category";
    $resultAllCategory = mysqli_query($connection_obj, $queryGetAllCategory) or die(mysqli_error($connection_obj));
    if(isset($_POST['submit-view-cart'])) {
        if(!isset($_SESSION['open_cart'])) {
            $_SESSION["open_cart"] = true;
        }
        else {
            $_SESSION["open_cart"] = !$_SESSION['open_cart'];
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./css/main.css?v=<?php echo time(); ?>">

</head>

<body>
    <div class="app">
        <div class="header">
            <div class="logo-shop-container">
                <img class="logo-shop" src="./images/logo-shop.png" alt="">
            </div>
            <nav class="nav-bar-header">
                <button class="btn-nav">TRANG CHỦ</button>
                <button class="btn-nav">HƯỚNG DẪN</button>
                <button class="btn-nav">GIỚI THIỆU CTY</button>
                <button class="btn-nav">TUYỂN DỤNG</button>
                <button class="btn-nav">LIÊN HỆ GÓP Ý</button>
            </nav>
            <div class="cart-view-container">
                <form action="" method="POST">
                    <button class="btn-nav btn-view-cart" type="submit" name="submit-view-cart">
                        XEM GIỎ HÀNG
                    </button>
                </form>
                <?php
                    if(isset($_SESSION["open_cart"]) && $_SESSION["open_cart"] == true) {
                        echo "<div class='cart-view'>";
                            require_once ("./components/cart.php");
                        echo "</div>";
                    }
                    else {
                        echo "<div class='cart-view hidden'>";
                            require_once ("./components/cart.php");
                        echo "</div>";
                    }
                ?>
            </div>
        </div>
        <div class="search">
            <p class="text-hello">CHÀO QUÝ KHÁCH</p>
            <form class="search-form" method="GET" action="./components/productListSearch.php">
                <label class="label-search" for="">Tìm kiếm: </label>
                <input class="input-search" placeholder="Nhập tên sản phẩm cần tìm..." type="text" name="search-input"
                    value="" />
                <?php
                    echo "<select class='product-category' name='product-category'>";
                        echo "<option value=''>--Lựa chọn danh mục sản phẩm--</option>";
                        while ($row = mysqli_fetch_array($resultAllCategory, MYSQLI_BOTH)) {
                            $nameCategory = $row['Name'];
                            $idCategory = $row['ID'];
                            echo "<option value='$idCategory'>$nameCategory</option>";
                        }
                    echo "</select>";
                    ?>
                <!-- <option value="laptop-hp">Laptop HP</option>
                    <option value="macbook">MACBOOK</option>
                    <option value="laptop-acer">LAPTOP ACER 4</option>
                    <option value="laptop-asus">LAPTOP ASUS 8</option> -->
                <button class="icon-search" type="submit">
                    <i class="fas fa-search"></i>
                </button>
            </form>

        </div>
        <div class="content">
            <div class="content-left">
                <?php require_once ("./components/sidebar.php");?>
            </div>
            <div class="content-right">
                <div class="main-content">
                    <?php require_once ("./components/mainContent.php");?>
                </div>
            </div>
        </div>
    </div>
</body>
<script>
// var btnViewCart = document.querySelector('.btn-view-cart');
// var cartView = document.querySelector('.cart-view');
// btnViewCart.onclick = () => {
//     console.log(cartView);
//     if (cartView.classList.contains('hidden')) {
//         $_SESSION["open_cart"] = true;
//         // cartView.classList.remove('hidden');
//     } else {
//         // cartView.classList.add('hidden');
//         $_SESSION["open_cart"] = false;

//     }
// }
</script>

</html>