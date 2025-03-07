<!DOCTYPE html>  
<html lang="vi">  
<head>  
    <meta charset="UTF-8">  
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  
    <title>Form Đăng Ký</title>  
    
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

input[type="text"], input[type="password"], select, textarea {  
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
    <header>  
        <h1>Form Đăng Ký</h1>  
       
    </header>  

    <form method="post" action="">  
        <label for="username">Username:</label>  
        <input type="text" id="username" name="username" required><br>  

        <label for="password">Password:</label>  
        <input type="password" id="password" name="password" required><br>  

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

        <label>Enable Programming Language:</label><br>  
        <input type="checkbox" id="php" name="language[]" value="PHP">  
        <label for="php">PHP</label>  
        <input type="checkbox" id="csharp" name="language[]" value="C#">  
        <label for="csharp">C#</label>  
        <input type="checkbox" id="java" name="language[]" value="Java">  
        <label for="java">Java</label>  
        <input type="checkbox" id="cpp" name="language[]" value="C++">  
        <label for="cpp">C++</label><br>  

        <label for="skill">Skill:</label>  
        <select id="skill" name="skill" required>  
            <option value="Normal">Normal</option>  
            <option value="Good">Good</option>  
            <option value="Very Good">Very Good</option>  
            <option value="Excellent">Excellent</option>  
        </select><br>  

        <label for="note">Note:</label>  
        <textarea id="note" name="note"></textarea><br>  

        <label>Marriage Status:</label>  
        <input type="radio" id="single" name="marriage" value="Single" required>  
        <label for="single">Single</label>  
        <input type="radio" id="married" name="marriage" value="Married">  
        <label for="married">Married</label><br>  

        <button type="reset">Reset</button>  
        <button type="submit">Register</button>  
    </form>  

    <?php  
    if ($_SERVER["REQUEST_METHOD"] == "POST") {  
        $username = htmlspecialchars($_POST['username']);  
        $password = htmlspecialchars($_POST['password']);  
        $gender = htmlspecialchars($_POST['gender']);  
        $address = htmlspecialchars($_POST['address']);  
        $languages = isset($_POST['language']) ? implode(", ", $_POST['language']) : 'None';  
        $skill = htmlspecialchars($_POST['skill']);  
        $note = htmlspecialchars($_POST['note']);  
        $marriage = htmlspecialchars($_POST['marriage']);  

        echo "<h2>Thông tin đăng ký</h2>";  
        echo "<p>Username: $username</p>";  
        echo "<p>Password: $password</p>";  
        echo "<p>Gender: $gender</p>";  
        echo "<p>Address: $address</p>";  
        echo "<p>Programming Languages: $languages</p>";  
        echo "<p>Skill: $skill</p>";  
        echo "<p>Note: $note</p>";  
        echo "<p>Marriage Status: $marriage</p>";  
    }  
    ?>  
</body>  
</html>