<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website PHP với Switch-Case</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            text-align: center;
        }
        .menu {
            background-color: #f1f1f1;
            padding: 10px;
            margin-bottom: 20px;
        }
        .menu a {
            padding: 10px 20px;
            background-color: #cceeff;
            border: 1px solid gray;
            border-radius: 5px;
            text-decoration: none;
            color: black;
            margin-right: 10px;
        }
        .menu a:hover {
            background-color: #99ddff;
        }
        .content {
            padding: 20px;
        }
    </style>
</head>
<body>

<div class="menu">
    <a href="index.php?page=home">Home</a>
    <a href="index.php?page=drawTable">DrawTable</a>
    <a href="index.php?page=ptBac2">PT Bậc 2</a>
    <a href="index.php?page=loop">Loop</a>
    <a href="index.php?page=contact">Contact</a>
</div>

<div class="content">
    <?php
        // Lấy giá trị của tham số 'page' từ URL
        $page = isset($_GET['page']) ? $_GET['page'] : 'home';

        // Sử dụng switch-case để hiển thị nội dung của từng trang
        switch($page) {
            case 'home':
                include 'home.php';
                break;
            case 'drawTable':
                include 'drawTable.php';
                break;
            case 'ptBac2':
                include 'ptBac2.php';
                break;
            case 'loop':
                include 'loop.php';
                break;
            case 'contact':
                include 'contact.php';
                break;
            default:
                echo "<h1>404 - Trang không tồn tại</h1>";
                echo "<p>Trang bạn tìm không tồn tại. Vui lòng chọn một trang khác từ menu.</p>";
                break;
        }
    ?>
</div>

</body>
</html>
