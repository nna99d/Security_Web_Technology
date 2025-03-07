<?php
    if(isset($_GET['search-input']) && isset($_GET['product-category'])) {
        // search-input=Macbook&product-category=1
        $searchInput = $_GET['search-input'];
        $idCategory = $_GET['product-category'];
        require_once ('../configs/database.php');
        mysqli_select_db($connection_obj, DATABASE_NAME);
        $queryGetAllProductSearch = "SELECT * FROM `products` WHERE `CategoryID` = $idCategory AND `Name` LIKE '%$searchInput%'";
        $queryCountAllProductSearch = "SELECT count(*) FROM `products` WHERE `CategoryID` = $idCategory AND `Name` LIKE '%$searchInput%'";
        // SELECT count(*) as total from Students
        // "SELECT * FROM `table_name` WHERE `name` LIKE 'mar%'";
        $resultAllProductSearch = mysqli_query($connection_obj, $queryGetAllProductSearch) or die(mysqli_error($connection_obj));
        $resultCountAllProductSearch = mysqli_query($connection_obj, $queryCountAllProductSearch) or die(mysqli_error($connection_obj));
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="http://localhost/Website-laptop/css/productListSearch.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="http://localhost/Website-laptop/css/home.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
    .table-product {
        width: 100%;
    }

    .table-product tr {
        background: none !important;
    }

    .table-product tr td {
        text-align: center;
    }
    </style>
</head>

<body>
    <div class="product-search-result-container">
        <?php
            $row = mysqli_fetch_row($resultCountAllProductSearch);
            $quantity = $row[0];
            echo "<p>Product found: $quantity</p>";
            // print_r($row);
        ?>
        <div class="result-search">
            <div class="table-product-by-category-id-container">
                <table class="table-bordered table-product-by-category-id">
                    <?php
                        while ($row = mysqli_fetch_array($resultAllProductSearch, MYSQLI_BOTH)) {
                            $ID = $row['ID'];
                            $nameProduct = $row['Name'];
                            $inforProduct = $row['Information'];
                            $priceProduct = $row['Price'];
                            $imageProduct = $row['Image'];
                            echo "<tr>";
                                echo "<td style='width:50px'>$ID</td>";
                                echo "<td>";
                                    echo "<a href='productDetail.php?productID=$ID'><img class='img-laptop' src='$imageProduct' alt=''></a>";
                                echo "</td>";
                                echo "<td>";
                                    echo "<a style='margin-bottom:5px;display: block;' href='productDetail.php?productID=$ID'>$nameProduct</a></br>";
                                    echo $inforProduct;
                                echo "</td>";
                                echo "<td>";
                                echo " <p style='color:blue;'>Giá:</p>";
                                    echo "<p style='color:red;'>$priceProduct</p>";
                                echo " <p>(Đã bao gồm VAT)</p>";
                            echo " </td>";
                            echo "</tr>";
                        }
                        mysqli_close($connection_obj);
                    ?>
                </table>
            </div>
        </div>
        <!-- <div class="reuslt-left">
            <img src="http://localhost/Website-laptop/images/macbook.jpg" alt="">
            <a href="#">View detail >></a>
        </div>
        <div class="result-right">
            <a href="#">Laptop Macbook (Core 2 Duo T6603/1GHz)Ram 2G/Hdd 500GB</a>
            <p>(Chưa bao gồm 10%VAT)</p>
            <div class="infor-product-result">
                <ul>
                    <li>Công nghệ CPU: Apple M1 8-core</li>
                    <li>RAM: 16 GB</li>
                    <li>Ổ cứng: 256 GB SSD</li>
                    <li>Màn hình: 3.3"Retina (2560 x 1600)</li>
                    <li>Card màn hình: Card tích hợp7 nhân GPU</li>
                </ul>
            </div>
        </div> -->
        <!-- <div class="result-search">
            <div class="reuslt-left">
                <img src="http://localhost/Website-laptop/images/macbook.jpg" alt="">
                <a href="#">View detail >></a>
            </div>
            <div class="result-right">
                <a href="#">Laptop Macbook (Core 2 Duo T6603/1GHz)Ram 2G/Hdd 500GB</a>
                <p>(Chưa bao gồm 10%VAT)</p>
                <div class="infor-product-result">
                    <ul>
                        <li>Công nghệ CPU: Apple M1 8-core</li>
                        <li>RAM: 16 GB</li>
                        <li>Ổ cứng: 256 GB SSD</li>
                        <li>Màn hình: 3.3"Retina (2560 x 1600)</li>
                        <li>Card màn hình: Card tích hợp7 nhân GPU</li>
                    </ul>
                </div>
            </div>
        </div> -->
    </div>
</body>

</html>