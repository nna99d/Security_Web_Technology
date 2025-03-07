<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập</title>
    <style>

        .form-group {
            margin-bottom:12px;
        }
        .submit_s {
            margin-left:40px;
        }
        .passwd {
            margin-left:33px;
        }


    </style>
</head>
<body>
    <div class="login-container">
        <h2>Đăng Nhập</h2>


        <form action="process_login.php" method="POST">
            <div class="form-group">
                <label for="username">Tên đăng nhập:</label>
                <input type="text" name="username" id="username" required>
            </div>

            <div class="form-group">
                <label for="password">Mật khẩu:</label>
                <input class="passwd" type="password" name="password" id="password" required>
            </div>

            <button class="submit_s" type="submit">Reset</button>
            <button type ="submit_t" >Login</button>
        </form>
    </div>
</body>
</html>
