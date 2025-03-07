<?php
     require_once ('./configs/database.php');
     mysqli_select_db($connection_obj, DATABASE_NAME);
     $queryGetAllCategory = "SELECT * FROM category";
     $resultAllCategory = mysqli_query($connection_obj, $queryGetAllCategory) or die(mysqli_error($connection_obj));
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
    <link rel="stylesheet" href="http://localhost/Website-laptop/css/sidebar.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <div class="category-laptop">
        <p class="title-category">DANH MỤC Laptop</p>
        <?php
                while ($row = mysqli_fetch_array($resultAllCategory, MYSQLI_BOTH)) {
                    $nameCategory = $row['Name'];
                    $idCategory = $row['ID'];
                    echo "<form class='form-category' action='http://localhost/Website-laptop/components/productList.php' method='POST'>";
                        echo "<input type='hidden' name='category-id' value='$idCategory' />";
                        echo "<input class='btn btn-danger' type='submit' name='submit-category-id' value='$nameCategory' />";
                    echo "</form>";
                }

            ?>
        <!-- <input class="btn btn-danger" type="submit" name="laptop-dell" value="Laptop DELL" />
            <input class="btn btn-danger" type="submit" name="laptop-hp" value="Laptop HP-Compaq" />
            <input class="btn btn-danger" type="submit" name="laptop-sony" value="Laptop SONY VAIO" />
            <input class="btn btn-danger" type="submit" name="laptop-lenovo" value="Laptop LENOVO" />
            <input class="btn btn-danger" type="submit" name="laptop-acer" value="Laptop ACER" />
            <input class="btn btn-danger" type="submit" name="laptop-asus" value="Laptop ASUS" />
            <input class="btn btn-danger" type="submit" name="laptop-sasmung" value="Laptop SAMSUNG" />
            <input class="btn btn-danger" type="submit" name="laptop-macbook" value="Laptop MACBOOK" />
            <input class="btn btn-danger" type="submit" name="laptop-netbook" value="Laptop NETBook" /> -->
        </form>
        <?php
            // mysqli_close($connection_obj);
        ?>
    </div>
    <div class="online-business">
        <p class="title-online-business">KINH DOANH ONLINE</p>
        <div class="online-business-container">
            <div class="online-business-list">
                <div class="online-business-item">
                    <div class="business-text">
                        <b>Kinh doanh</b>
                        <p>0123456789</p>
                    </div>
                    <i class="icon-male fas fa-male"></i>
                    <div class="active-status">
                        <i class="icon-smile-active-status-on far fa-smile"></i>
                        <p>Online Now</p>
                    </div>
                </div>

                <div class="online-business-item">
                    <div class="business-text">
                        <b>Kinh doanh</b>
                        <p>0123456789</p>
                    </div>
                    <i class="icon-female fas fa-female"></i>
                    <div class="active-status">
                        <i class="icon-smile-active-status-on far fa-smile"></i>
                        <p>Online Now</p>
                    </div>
                </div>
                <div class="online-business-item">
                    <div class="business-text">
                        <b>Kinh doanh</b>
                        <p>0123456789</p>
                    </div>
                    <i class="icon-male fas fa-male"></i>
                    <div class="active-status">
                        <i class="icon-smile-active-status-on far fa-smile"></i>
                        <p>Online Now</p>
                    </div>
                </div>
                <div class="online-business-item">
                    <div class="business-text">
                        <b>Hỗ trợ</b>
                        <p>(Kỹ thuật)</p>
                    </div>
                    <i class="icon-male fas fa-male"></i>
                    <div class="active-status">
                        <i class="icon-smile-active-status-off far fa-smile"></i>
                        <p>Not Online</p>
                    </div>
                </div>
            </div>
            <div class="images-laptop-advertising">
                <img class="image-laptop-advertising" src="http://localhost/Website-laptop/images/qc-laptop1.png"
                    alt="">
                <img class="image-laptop-advertising" src="http://localhost/Website-laptop/images/qc-laptop2.jpg"
                    alt="">
            </div>
        </div>

    </div>
</body>

</html>