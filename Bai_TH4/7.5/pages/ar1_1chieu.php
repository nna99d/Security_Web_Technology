<!DOCTYPE html>  
<html lang="vi">  
<head>  
    <meta charset="UTF-8">  
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  
    <title>Tính Toán Dãy Số</title>  
    <style>  
        body {  
            font-family: Arial, sans-serif;  
            margin: 20px;  
        }  
        .container {  
            display: flex;  
            align-items: flex-start;  
        }  
        .image {  
            margin-right: 20px;  
        }  
        .result {  
            margin-top: 20px;  
        }  
        input[type="number"] {  
            width: 50px;  
            text-align: center;  
        }  
        button {  
            margin-left: 10px;  
        }  
    </style>  
</head>  
<body>  

    <div class="container">  
        
        <div>  
            <h2>Thao tác trên mảng 1 chiều:</h2>  
            <p>Bài toán: nhập vào chuỗi số: tính tổng các số, giá trị trung bình, tìm min, max, trung bình cộng.</p>  
            <div>  
                <input type="number" id="num1" value="3">  
                <input type="number" id="num2" value="3">  
                <input type="number" id="num3" value="1">  
                <input type="number" id="num4" value="3">  
                <input type="number" id="num5" value="5">  
                <input type="number" id="num6" value="3">  
                <input type="number" id="num7" value="3">  
                <button onclick="calculate()">Calculate</button>  
                <button onclick="resetFields()">Reset</button>  
            </div>  
            <div class="result">  
                <h3>KẾT QUẢ:</h3>  
                <p>Tổng: <span id="sum">0</span></p>  
                <p>Trung bình: <span id="average">0</span></p>  
                <p>Min: <span id="min">0</span></p>  
                <p>Max: <span id="max">0</span></p>  
            </div>  
        </div>  
    </div>  

    <script>  
        function calculate() {  
            const numbers = [  
                parseInt(document.getElementById('num1').value),  
                parseInt(document.getElementById('num2').value),  
                parseInt(document.getElementById('num3').value),  
                parseInt(document.getElementById('num4').value),  
                parseInt(document.getElementById('num5').value),  
                parseInt(document.getElementById('num6').value),  
                parseInt(document.getElementById('num7').value)  
            ];  

            const sum = numbers.reduce((a, b) => a + b, 0);  
            const average = sum / numbers.length;  
            const min = Math.min(...numbers);  
            const max = Math.max(...numbers);  

            document.getElementById('sum').innerText = sum;  
            document.getElementById('average').innerText = average.toFixed(2);  
            document.getElementById('min').innerText = min;  
            document.getElementById('max').innerText = max;  
        }  

        function resetFields() {  
            const inputs = document.querySelectorAll('input[type="number"]');  
            inputs.forEach(input => input.value = 0);  
            document.getElementById('sum').innerText = 0;  
            document.getElementById('average').innerText = 0;  
            document.getElementById('min').innerText = 0;  
            document.getElementById('max').innerText = 0;  
        }  
    </script>  

</body>  
</html>