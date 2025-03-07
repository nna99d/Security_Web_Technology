<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Draw Table</title>
    <link rel="stylesheet" href="style.css">
    <script src="script.js" defer></script>
    <style>
    body {
    font-family: Arial, sans-serif;
}

.form-draw {
    margin-bottom: 20px;
}

label {
    margin-right: 10px;
}

input {
    margin-right: 10px;
    width: 50px;
}

button {
    margin-right: 10px;
    padding: 5px 10px;
}

#table-container {
    margin-top: 20px;
}

table {
    width: 100%;
    border-collapse: collapse;
}

table, th, td {
    border: 1px solid black;
    text-align: center;
    padding: 10px;
}

    </style>
</head>
<body>
    <h1>Mọi page được chạy trên trang Index.php</h1>
    
    <h2>Trang DrawTable:</h2>
    
    <div class="form-draw">
        <form> 

        <label for="rows">Số dòng:</label>
        <input type="number" id="rows" min="1" placeholder="Nhập số dòng">

        <label for="cols">Số cột:</label>
        <input type="number" id="cols" min="1" placeholder="Nhập số cột">

        <button type="button" id="drawBtn">Vẽ</button>
        <button type="button" id="resetBtn">Nhập lại</button>

        </form>
    </div>

    <p>(Khi Click nút Vẽ thì mới vẽ bảng và hiển thị bên dưới)</p>

    <div id="table-container"></div>
<script>   
     document.getElementById('drawBtn').addEventListener('click', function() {
    const rows = document.getElementById('rows').value;
    const cols = document.getElementById('cols').value;
    const container = document.getElementById('table-container');

    // Clear previous table if exists
    container.innerHTML = '';

    if (rows > 0 && cols > 0) {
        let table = document.createElement('table');

        for (let i = 1; i <= rows; i++) {
            let tr = document.createElement('tr');

            for (let j = 1; j <= cols; j++) {
                let td = document.createElement('td');
                td.textContent = i + j - 1; // Some numbering logic
                tr.appendChild(td);
            }

            table.appendChild(tr);
        }

        container.appendChild(table);
    }
});

    document.getElementById('resetBtn').addEventListener('click', function() {
    document.getElementById('rows').value = '';
    document.getElementById('cols').value = '';
    document.getElementById('table-container').innerHTML = '';
});

</script>

</body>
</html>
