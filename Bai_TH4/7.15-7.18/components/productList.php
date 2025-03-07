<?php
    $rootDir = realpath($_SERVER["DOCUMENT_ROOT"])."/Website-laptop/";
    require_once ($rootDir.'configs/database.php');
    mysqli_select_db($connection_obj, DATABASE_NAME);
    if(isset($_POST['submit-category-id'])) {
        $idCategory = $_POST['category-id'];
        $queryGetAllProductByCategoryID = "SELECT * FROM products WHERE CategoryID= $idCategory";
        $resultAllProductByCategoryID  = mysqli_query($connection_obj, $queryGetAllProductByCategoryID) or die(mysqli_error($connection_obj));
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
    <div class="product-list-container">
        <div class="table-product-by-category-id-container">
            <table class="table-bordered table-product-by-category-id">
                <?php
                     while ($row = mysqli_fetch_array($resultAllProductByCategoryID, MYSQLI_BOTH)) {
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
                                echo "<p style='color:blue;font-size:20px'>$nameProduct</p>"."</br>".$inforProduct;
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
</body>

</html>