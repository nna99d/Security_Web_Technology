<!DOCTYPE html>  
<html lang="vi">  
<head>  
    <meta charset="UTF-8">  
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  
    <title>Tính Toán Ma Trận</title>  
   
    <style> 
      body {  
    font-family: Arial, sans-serif;  
    margin: 20px;  
}  

h1, h2 {  
    color: #333;  
}  

.matrix-input {  
    margin-bottom: 20px;  
}  

table {  
    border-collapse: collapse;  
}  

td {  
    padding: 10px;  
}  

input {  
    width: 50px;  
    text-align: center;  
}
    </style>
</head>  
<body>  
    <h1>Sử dụng mảng để tính: hiệu, tổng, tích 2 ma trận</h1>  
    
    <div class="matrix-input">  
        <h2>Nhập Ma Trận 1</h2>  
        <table>  
            <tr>  
                <td><input type="number" id="a11"></td>  
                <td><input type="number" id="a12"></td>  
                <td><input type="number" id="a13"></td>  
            </tr>  
            <tr>  
                <td><input type="number" id="a21"></td>  
                <td><input type="number" id="a22"></td>  
                <td><input type="number" id="a23"></td>  
            </tr>  
            <tr>  
                <td><input type="number" id="a31"></td>  
                <td><input type="number" id="a32"></td>  
                <td><input type="number" id="a33"></td>  
            </tr>  
        </table>  
    </div>  

    <div class="matrix-input">  
        <h2>Nhập Ma Trận 2</h2>  
        <table>  
            <tr>  
                <td><input type="number" id="b11"></td>  
                <td><input type="number" id="b12"></td>  
                <td><input type="number" id="b13"></td>  
            </tr>  
            <tr>  
                <td><input type="number" id="b21"></td>  
                <td><input type="number" id="b22"></td>  
                <td><input type="number" id="b23"></td>  
            </tr>  
            <tr>  
                <td><input type="number" id="b31"></td>  
                <td><input type="number" id="b32"></td>  
                <td><input type="number" id="b33"></td>  
            </tr>  
        </table>  
    </div>  

    <button onclick="calculate()">Tính</button>  
    <button onclick="reset()">Nhập Lại</button>  

    <h2>Kết Quả:</h2>  
    <div id="result"></div>  

    <script >
        function calculate() {  
    const a = [  
        [parseInt(document.getElementById('a11').value), parseInt(document.getElementById('a12').value), parseInt(document.getElementById('a13').value)],  
        [parseInt(document.getElementById('a21').value), parseInt(document.getElementById('a22').value), parseInt(document.getElementById('a23').value)],  
        [parseInt(document.getElementById('a31').value), parseInt(document.getElementById('a32').value), parseInt(document.getElementById('a33').value)]  
    ];  

    const b = [  
        [parseInt(document.getElementById('b11').value), parseInt(document.getElementById('b12').value), parseInt(document.getElementById('b13').value)],  
        [parseInt(document.getElementById('b21').value), parseInt(document.getElementById('b22').value), parseInt(document.getElementById('b23').value)],  
        [parseInt(document.getElementById('b31').value), parseInt(document.getElementById('b32').value), parseInt(document.getElementById('b33').value)]  
    ];  

    const sum = addMatrices(a, b);  
    const diff = subtractMatrices(a, b);  
    const product = multiplyMatrices(a, b);  

    displayResult(sum, diff, product);  
}  

function addMatrices(a, b) {  
    return a.map((row, i) => row.map((val, j) => val + b[i][j]));  
}  

function subtractMatrices(a, b) {  
    return a.map((row, i) => row.map((val, j) => val - b[i][j]));  
}  

function multiplyMatrices(a, b) {  
    const result = Array.from({ length: 3 }, () => Array(3).fill(0));  
    for (let i = 0; i < 3; i++) {  
        for (let j = 0; j < 3; j++) {  
            for (let k = 0; k < 3; k++) {  
                result[i][j] += a[i][k] * b[k][j];  
            }  
        }  
    }  
    return result;  
}  

function displayResult(sum, diff, product) {  
    let resultHtml = `<strong>Ma trận Tổng:</strong><br>`;  
    resultHtml += sum.map(row => row.join(' ')).join('<br>') + '<br><br>';  
    
    resultHtml += `<strong>Ma trận Hiệu:</strong><br>`;  
    resultHtml += diff.map(row => row.join(' ')).join('<br>') + '<br><br>';  
    
    resultHtml += `<strong>Ma trận Tích:</strong><br>`;  
    resultHtml += product.map(row => row.join(' ')).join('<br>');  

    document.getElementById('result').innerHTML = resultHtml;  
}  

function reset() {  
    const inputs = document.querySelectorAll('input');  
    inputs.forEach(input => input.value = '');  
    document.getElementById('result').innerHTML = '';  
}
    </script>  
</body>  
</html>