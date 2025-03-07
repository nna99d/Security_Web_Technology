<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Calculator</title>
    <style>
     

.calculator-container {
    background-color: #fff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    width: 300px;
    text-align: center;
}

h2 {
    margin-bottom: 20px;
}

.input-group {
    margin-bottom: 15px;
}

input[type="number"], input[type="radio"] {
    margin-left: 10px;
}

button {
    background-color: #4CAF50;
    color: white;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

button:hover {
    background-color: #45a049;
}

.result {
    margin-top: 20px;
}

#resultDisplay {
    font-size: 1.5em;
    font-weight: bold;
    color: #333;
}

    </style>
   
</head>
<body>

    <div class="calculator-container">
        <h2>Nhập 2 số nguyên a, b và chọn phép tính:</h2>
        <form id="calculatorForm">
            <div class="input-group">
                <label for="number1">Số a:</label>
                <input type="number" id="number1" required>
            </div>

            <div class="input-group">
                <label for="number2">Số b:</label>
                <input type="number" id="number2" required>
            </div>

            <div class="input-group">
                <label for="operation">Phép tính:</label>
                <input type="radio" id="add" name="operation" value="+" required> +
                <input type="radio" id="subtract" name="operation" value="-"> -
                <input type="radio" id="multiply" name="operation" value="*"> *
                <input type="radio" id="divide" name="operation" value="/"> /
            </div>

            <button type="button" id="calculateBtn">Caculate</button>
        </form>

        <div class="result">
            <h3>Kết quả:</h3>
            <p id="resultDisplay"></p>
        </div>
    </div>

    <script>
        window.onload = function() {
    const calculateBtn = document.getElementById("calculateBtn");
    const resultDisplay = document.getElementById("resultDisplay");

    calculateBtn.addEventListener("click", function() {
        // Lấy giá trị từ input số


        const number1 = parseFloat(document.getElementById("number1").value);
        const number2 = parseFloat(document.getElementById("number2").value);

        // Lấy phép tính được chọn
        const operation = document.querySelector('input[name="operation"]:checked');

        // Kiểm tra nếu người dùng chưa chọn phép tính
        if (!operation) {
            resultDisplay.textContent = "Vui lòng chọn phép tính!";
            return;
        }

        let result;
        // Thực hiện phép tính
        switch (operation.value) {
            case '+':
                result = number1 + number2;
                break;
            case '-':
                result = number1 - number2;
                break;
            case '*':
                result = number1 * number2;
                break;
            case '/':
                if (number2 === 0) {
                    resultDisplay.textContent = "Không thể chia cho 0!";
                    return;
                }
                result = number1 / number2;
                break;
            default:
                result = "Phép tính không hợp lệ!";
        }


       

        // Hiển thị kết quả
        resultDisplay.textContent = "Kết quả: " + result;
    });
}

    </script>
</body>
</html>
