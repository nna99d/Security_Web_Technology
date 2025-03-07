<!DOCTYPE html>  
<html lang="vi">  
<head>  
    <meta charset="UTF-8">  
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  
    <title>Form Nhập Liệu</title>  
   
    <style> 
        body {  
    font-family: Arial, sans-serif;  
    background-color: #f4f4f4;  
    margin: 0;  
    padding: 20px;  
}  

.container {  
    background: white;  
    padding: 20px;  
    border-radius: 5px;  
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);  
    max-width: 400px;  
    margin: auto;  
}  

h2 {  
    text-align: center;  
}  

label {  
    display: block;  
    margin: 10px 0 5px;  
}  

input {  
    width: 100%;  
    padding: 8px;  
    margin-bottom: 10px;  
    border: 1px solid #ccc;  
    border-radius: 4px;  
}  

button {  
    width: 48%;  
    padding: 10px;  
    margin: 5px 1%;  
    border: none;  
    border-radius: 4px;  
    cursor: pointer;  
}  

button[type="button"] {  
    background-color: #28a745;  
    color: white;  
}  

button[type="reset"] {  
    background-color: #dc3545;  
    color: white;  
}
    </style>
</head>  
<body>  
    <div class="container">  
        <h2>Nhập Thông Tin</h2>  
        <form id="studentForm">  
            <label for="name">Họ và tên:</label>  
            <input type="text" id="name" required>  

            <label for="class">Lớp:</label>  
            <input type="text" id="class" required>  

            <label for="score1">Điểm M1:</label>  
            <input type="number" id="score1" required>  

            <label for="score2">Điểm M2:</label>  
            <input type="number" id="score2" required>  

            <label for="score3">Điểm M3:</label>  
            <input type="number" id="score3" required>  

            <label for="totalScore">Tổng điểm:</label>  
            <input type="text" id="totalScore" readonly>  

            <button type="button" id="okButton">OK</button>  
            <button type="reset">Cancel</button>  
        </form>  
        <div id="result"></div>  
    </div>  
    <script >
        document.getElementById('okButton').onclick = function() {  
    const score1 = parseFloat(document.getElementById('score1').value);  
    const score2 = parseFloat(document.getElementById('score2').value);  
    const score3 = parseFloat(document.getElementById('score3').value);  

    if (isNaN(score1) || isNaN(score2) || isNaN(score3)) {  
        alert("Điểm M1, M2, M3 phải là số!");  
        return;  
    }  

    const totalScore = score1 + score2 + score3;  
    document.getElementById('totalScore').value = totalScore;  

    const resultDiv = document.getElementById('result');  
    resultDiv.innerHTML = `<h3>Kết quả:</h3><p>Tổng điểm: ${totalScore}</p>`;  
};
    </script>  
</body>  
</html>