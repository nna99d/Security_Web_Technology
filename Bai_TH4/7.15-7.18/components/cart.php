<?php
     $rootDir = realpath($_SERVER["DOCUMENT_ROOT"])."/Website-laptop/";
     require_once ($rootDir.'configs/database.php');
     mysqli_select_db($connection_obj, DATABASE_NAME);
     $queryGetCart = "SELECT * FROM cart";
     $resultCart = mysqli_query($connection_obj, $queryGetCart) or die(mysqli_error($connection_obj));
     if(isset($_POST['add-to-cart'])) {
        $nameProduct = $_POST['nameProduct'];
        $priceProduct = $_POST['priceProduct'];
        $imageProduct = $_POST['imageProduct'];
        $queryAddNewCart = "INSERT INTO cart(`ImageProduct`,`NameProduct`, `PriceProduct`)
            VALUES ('". mysqli_real_escape_string($connection_obj, $imageProduct) ."','". mysqli_real_escape_string($connection_obj, $nameProduct) ."','". mysqli_real_escape_string($connection_obj, $priceProduct) ."')";
            // run the insert query
            mysqli_query($connection_obj, $queryAddNewCart);          
            header("location: ../index.php");
     }
     if(isset($_GET['idProductCartDelete'])) {
        $idProductCartDelete = $_GET['idProductCartDelete'];
        $queryDeleteCart = "DELETE FROM cart WHERE ID='$idProductCartDelete'";
        mysqli_query($connection_obj, $queryDeleteCart); 
        header("location: ../index.php");
     }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    .content-cart {
        display: flex;
        flex-direction: column;
    }

    .content-lef-cart {
        width: 30%;
    }

    .content-right-cart {
        width: 70%;
        display: flex;
        align-items: center;
        gap: 20px;
    }

    a {
        color: black;
        text-decoration: none;
        font-size: 20px;
    }

    .img-laptop {
        width: 60px;
        height: 60px;
    }

    .cart-item {
        padding-bottom: 10px;
        display: flex;
        align-items: center;
        gap: 20px;
        border-top: 1px solid #ddd;
    }
    </style>
</head>

<body>
    <div class="cart-container">
        <h4>Giỏ hàng</h4>
        <div class="content-cart">
            <?php
                while ($row = mysqli_fetch_array($resultCart, MYSQLI_BOTH)) {
                    $id= $row['ID'];
                    $nameProduct = $row['NameProduct'];
                    $imageProduct = $row['ImageProduct'];
                    $priceProduct = $row['PriceProduct'];
                    echo "<div class='cart-item'>";
                        echo "<div class='content-left-cart'>";
                            echo "<img class='img-laptop' src='$imageProduct' alt=''>";
                       echo " </div>";
                        echo "<div class='content-right-cart'>";
                            echo "<div>";
                               echo "<p style='color:blue'>$nameProduct</p>";
                                echo "<p style='color:red'>Giá: $priceProduct</p>";
                            echo "</div>";
                            echo "<form action='' method='GET'>";
                               echo " <a href='http://localhost/Website-laptop/components/cart.php?idProductCartDelete=$id'>X</a>";
                            echo "</form>";
                       echo " </div>";
                    echo "</div>";

                }
            ?>

        </div>
    </div>
</body>

</html>