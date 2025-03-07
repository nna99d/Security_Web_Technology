<!DOCTYPE html>  
<html lang="vi">  
<head>  
    <meta charset="UTF-8">  
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  
    <title>Contact Page</title>  
     <style>
        body {  
    font-family: Arial, sans-serif;  
    margin: 20px;  
}  

header {  
    background-color: #f2f2f2;  
    padding: 10px;  
    text-align: center;  
}  

nav a {  
    margin: 0 15px;  
    text-decoration: none;  
    color: #333;  
}  

h1, h2 {  
    color: #333;  
}  

form {  
    margin-bottom: 20px;  
}  

label {  
    display: block;  
    margin: 10px 0 5px;  
}  

input[type="text"], select, textarea {  
    width: 100%;  
    padding: 8px;  
    margin-bottom: 10px;  
}  

button {  
    margin: 5px 10px 0;  
}
     </style>
</head>  
<body>  
    

    <h2>Form Liên Hệ</h2>  

    <form method="post" action="">  
        <label for="username">Username:</label>  
        <input type="text" id="username" name="username" required><br>  

        <label>Gender:</label>  
        <input type="radio" id="male" name="gender" value="Male" required>  
        <label for="male">Male</label>  
        <input type="radio" id="female" name="gender" value="Female">  
        <label for="female">Female</label><br>  

        <label for="address">Address:</label>  
        <select id="address" name="address" required>  
            <option value="Ha Noi">Ha Noi</option>  
            <option value="TP. HCM">TP. HCM</option>  
            <option value="Hue">Hue</option>  
            <option value="Da Nang">Da Nang</option>  
        </select><br>  

        <label for="note">Note:</label>  
        <textarea id="note" name="note" required></textarea><br>  

        <button type="reset">Reset</button>  
        <button type="submit">Contact</button>  
    </form>  
   
    <?php  

    if ($_SERVER["REQUEST_METHOD"] == "POST") {  
        $username = htmlspecialchars($_POST['username']);  
        $gender = htmlspecialchars($_POST['gender']);  
        $address = htmlspecialchars($_POST['address']);  
        $note = htmlspecialchars($_POST['note']);  

        echo "<h2>Thông tin liên hệ</h2>";  
        echo "<p>Username: $username</p>";  
        echo "<p>Gender: $gender</p>";  
        echo "<p>Address: $address</p>";  
        echo "<p>Note: $note</p>";  
    }

    ?>  
</body>  
</html>