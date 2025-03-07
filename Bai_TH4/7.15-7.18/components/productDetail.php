<?php
    if(isset($_GET['productID'])){
        $productIDDetail = $_GET['productID'];
        require_once ('../configs/database.php');
        mysqli_select_db($connection_obj, DATABASE_NAME);
        $queryGetProductDetail = "SELECT * FROM products WHERE ID = $productIDDetail";
        $resultProductDetail = mysqli_query($connection_obj, $queryGetProductDetail) or die(mysqli_error($connection_obj));
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
    <link rel="stylesheet" href="http://localhost/Website-laptop/css/productDetail.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <div class="product-detail-container">
        <div class="img-laptop-detail">
            <?php
                while ($row = mysqli_fetch_array($resultProductDetail, MYSQLI_BOTH)) {
                    $imageProduct = $row['Image'];
                    echo "<img class='img-laptop' src='$imageProduct' alt=''>";
                }
            ?>
        </div>
        <div class="product-info">
            <?php
            $resultProductDetail = mysqli_query($connection_obj, $queryGetProductDetail) or die(mysqli_error($connection_obj));

                while ($row = mysqli_fetch_array($resultProductDetail, MYSQLI_BOTH)) {
                    $imageProduct = $row['Image'];
                    $ID = $row['ID'];
                    $nameProduct = $row['Name'];
                    $inforProduct = $row['Information'];
                    $priceProduct = $row['Price'];
                    echo $ID;
                    echo $nameProduct;
                    echo $inforProduct;
                    echo "<p>Bộ xử lý Công nghệ CPU Intel Core i5 Alder Lake - 1240P Số nhân 12 Số luồng 16 Tốc độ CPU 1.70 GHz Tốc độ tối đa Turbo Boost 4.4 GHz Bộ nhớ đệm 12 MB Bộ nhớ RAM, Ổ cứng RAM 16 GB Loại RAM DDR5 2 khe (1 khe 8 GB onboard + 1 khe 8 GB) Tốc độ Bus RAM 4800 MHz Hỗ trợ RAM tối đa 40 GB Ổ cứng 512 GB SSD NVMe PCIe (Có thể tháo ra, lắp thanh khác tối đa 1 TB)Hỗ trợ thêm 1 khe cắm SSD M.2 PCIe mở rộng (nâng cấp tối đa 1 TB) Màn hình Màn hình 14 inch Độ phân giải Full HD (1920 x 1080) Tần số quét 60 Hz Công nghệ màn hình Màn hình Wide View Tấm nền IPS Chống chói Anti Glare LED Backlit 100% sRGB 400 nits Đồ họa và Âm thanh Card màn hình Card tích hợp - Intel Iris Xe Graphics Công nghệ âm thanh Dolby Atmos Cổng kết nối & tính năng mở rộng Cổng giao tiếp 2 x Thunderbolt 4 hỗ trợ display / power delivery 1 x USB 2.0 Jack tai nghe 3.5 mm 1 x USB 3.2 HDMI LAN (RJ45) Kết nối không dây Bluetooth 5.2Wi-Fi 6E (802.11ax) Khe đọc thẻ nhớ Micro SD Webcam Full HD WebcamCamera IR Đèn bàn phím Có Tính năng khác TPM 2.0 Độ bền chuẩn quân đội MIL STD 810H Bản lề mở 180 độ Bảo mật vân tay Công tắc khóa camera Numberpad Mở khóa khuôn mặt Kích thước & trọng lượng Kích thước, khối lượng Dài 323.4 mm - Rộng 223.1 mm - Dày 18 mm - Nặng 1.25 kg Chất liệu Vỏ kim loại - chiếu nghỉ tay Nhôm Magie Thông tin khác Thông tin Pin 3-cell Li-ion, 63 Wh Hệ điều hành Windows 11 Home SL Thời điểm ra mắt 2022</p>";
                    echo " <p style='color:blue;'>Giá:</p>";
                    echo "<p style='color:red;'>$priceProduct</p>";
                    echo " <p>(Đã bao gồm VAT)</p>";
                    echo "<form action='http://localhost/Website-laptop/components/cart.php' method='POST'>";
                        echo "<input type='hidden' name='nameProduct' value='$nameProduct'/>";
                        echo "<input type='hidden' name='priceProduct' value='$priceProduct'/>";
                        echo "<input type='hidden' name='imageProduct' value='$imageProduct'/>";
                        echo "<input class='btn btn-primary' type='submit' name='add-to-cart' value='Thêm vào giỏ hàng'/>";
                    echo "</form>";
                }
            ?>

        </div>
    </div>
</body>

</html>