<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website Demo</title>
    <style>
        /* CSS cơ bản */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        .header {
            background-color: #ffcc00;
            text-align: center;
            padding: 10px;
        }
        .menu {
            display: flex;
            justify-content: center;
            background-color: #f2f2f2;
            padding: 10px;
        }
        .menu a {
            margin: 0 10px;
            text-decoration: none;
            padding: 10px 20px;
            background-color: #eee;
            border-radius: 5px;
            color: black;
        }
        .menu a:hover {
            background-color: #ddd;
        }
        .content {
            padding: 20px;
            text-align: center;
            display: flex ;
            justify-content: space-around;
        }
        .content_left {
            flex-direction:column;
            display: grid;
        }
        .content_right {

        }
        .cool_boy  {
          width:227px;
          height:180px;
          margin-bottom: 20px;

        }
        .cool_boy2 {
            width:227px;
            height:180px;
        }

    </style>
</head>
<body>

<div class="header">
    <img src="./img/a1.jpg" alt="Banner" height ="500px" width="100%">
</div>

<div class="menu">
    <a href="index.php?page=home">Home</a>
    <a href="index.php?page=ar1_1chieu">Ar1_1chieu</a>
    <a href="index.php?page=AssociateArr">AssociateArr</a>
    <a href="index.php?page=loop">Loop</a>
</div>

<div class="content">
  <div class = "content_left">
    <img  class = "cool_boy"src = "./img/a2.jpg">
    <img  class  = "cool_boy2"src = "./img/a3.jpg">

  </div>
  <div class = "content_right "> 
       
  <?php
    if (isset($_GET['page'])) {
        $page = $_GET['page'];
    } else {
        $page = 'home'; 
    }

    switch ($page) {
        case 'home':
            include 'pages/home.php';
            break;
        case 'ar1_1chieu':
            include 'pages/ar1_1chieu.php';
            break;
        case 'AssociateArr':
            include 'pages/AssociateArr.php';
            break;
        case 'loop':
            include 'pages/loop.php';
            break;
        default:
            echo "<h2>Chào mừng đến trang chủ</h2>";
            echo "<p>Chọn một tính năng từ menu để sử dụng.</p>";
            break;
    }
    ?>

  </div>
    
</div>

</body>
</html>
