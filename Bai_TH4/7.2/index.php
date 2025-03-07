<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website Demo</title>
    <style>
        
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
    <a href="index.php?page=calculate">Calculate</a>
    <a href="index.php?page=drawTable">DrawTable</a>
    <a href="index.php?page=register">Register</a>
    <a href="index.php?page=contact">Contact</a>
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
        case 'calculate':
            include 'pages/calculate.php';
            break;
        case 'drawTable':
            include 'pages/drawTable.php';
            break;
        case 'register':
            include 'pages/register.php';
            break;
        case 'contact':
            include 'pages/contact.php';
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
