<!DOCTYPE html>  
<html lang="vi">  
<head>  
    <meta charset="UTF-8">  
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  
    <title>Tải lên Tệp</title>  
    <style>
        body {  
    font-family: Arial, sans-serif;  
    margin: 20px;  
}  

h1, h2 {  
    color: #333;  
}  

input[type="file"] {  
    margin: 10px 0;  
}  

button {  
    margin: 10px 5px;  
}
    </style>
</head>  
<body>  
    <h1>Sử dụng mạng kết hợp:</h1>  
    <p>(Bài toán: Upload 10 file, in danh sách tên 10 file và đường dẫn download file)</p>  

    <form action="./pages/upload.php" method="post" enctype="multipart/form-data">  
        <?php for ($i = 1; $i <= 10; $i++): ?>  
            <label for="file<?= $i ?>">File <?= $i ?>:</label>  
            <input type="file" name="files[]" id="file<?= $i ?>" required><br>  
        <?php endfor; ?>  
        <button type="reset">Reset</button>  
        <button type="submit">Upload</button>  
    </form>  

    <h2>Danh sách file đã upload:</h2>  
    <ul>  
        <?php  
        if (file_exists('./uploads')) {  
            $files = scandir('./uploads');  
            foreach ($files as $file) {  
                if ($file !== '.' && $file !== '..') {  
                    echo "<li>Download File: <a href='uploads/$file'>$file</a></li>";  
                }  
            }  
        }  
        ?>  
    </ul>  
</body>  
</html>