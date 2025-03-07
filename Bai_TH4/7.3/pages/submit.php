<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Nhận dữ liệu từ biểu mẫu
    $name = htmlspecialchars($_POST['name']);
    $address = htmlspecialchars($_POST['address']);
    $job = htmlspecialchars($_POST['job']);
    $note = htmlspecialchars($_POST['note']);
    

    // Trả về kết quả dưới dạng HTML
    echo "
      <div class='result-container'>
        <h3>Kết Quả Đã Đăng Ký</h3>
        <p><strong>Tên:</strong> $name</p>
        <p><strong>Địa chỉ:</strong> $address</p>
        <p><strong>Nghề:</strong> $job </p>
        <p><strong>Ghi chú:</strong> $note</p>
    </div>";

}
?>