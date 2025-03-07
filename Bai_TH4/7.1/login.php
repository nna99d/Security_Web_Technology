<!DOCTYPE html>  
<html lang="vi">  
<head>  
    <meta charset="UTF-8">  
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  
    <title>Login Form</title>  
    <style>
        body {  
    font-family: Arial, sans-serif;  
}  

.container {  
    width: 300px;  
    margin: 0 auto;  
    padding: 20px;  
    border: 1px solid #ccc;  
    border-radius: 5px;  
}  

.footer {  
    display: flex;  
    justify-content: space-between;  
    margin-top: 20px;  
}  

.footer-item {  
    width: 14%;  
    height: 30px;  
}  

.blue { background-color: blue; }  
.yellow { background-color: yellow; }  
.red { background-color: red; }  
.green { background-color: green; }  
.pink { background-color: pink; }  
.gray { background-color: gray; }  
.orange { background-color: orange; }
    </style>
</head>  
<body>  
    
    <div class="container">  
        <h2>Login Form</h2>  
        <form action="process_login.php" method="post">  
            <label for="username">Username:</label>  
            <input type="text" id="username" name="username" required>  
            <br>  
            <label for="password">Password:</label>  
            <input type="password" id="password" name="password" required>  
            <br>  
            <button type="reset">Reset</button>  
            <button type="submit">Login</button>  
        </form>  
    </div>  
    <?php include 'footer.php'; ?>  
</body>  
</html>