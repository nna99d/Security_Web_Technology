<?php
    
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    .web-link-list {
        display: flex;
        flex-direction: column;
        gap: 10px;
    }
    </style>
</head>

<body>
    <div class="web-link-list-container">
        <?php
            if(!$isLogin) {
                echo "<p>Chưa đăng nhập</p>";
            }
            else {
                // echo "<h3>Danh sách Web Link ưa thích:</h3>";
            }
        ?>
        <div class="web-link-list">
            <h3>Danh sách Web Link ưa thích:</h3>
            <?php
                if (isset($_COOKIE['weblink'])) {
                    foreach ($_COOKIE['weblink'] as $name => $value) {
                        $value = htmlspecialchars($value);
                        echo "<p>$value</p>";
                    }
                }
            ?>
        </div>
        <form action="" method="POST">
            <div class="form-group">
                <label for="">Web Link:</label>
                <input class="form-control mb-3" type="text" name="webLink" value="">
            </div>
            <input class="btn btn-primary" type="submit" name="add_web_link" value="Add Web Link">
        </form>
    </div>
</body>

</html>