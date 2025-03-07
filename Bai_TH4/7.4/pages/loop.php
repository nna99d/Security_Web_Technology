<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Print Stars using Loops</title>
    <link rel="stylesheet" href="style.css">
    <style>
     body {
    font-family: Arial, sans-serif;
    }

.output-container {
    margin-top: 20px;
}

h3 {
    color: #333;
    font-weight: bold;
}

#forOutput, #whileOutput, #doWhileOutput {
    font-family: 'Courier New', Courier, monospace;
    white-space: pre;
    margin-bottom: 20px;
}

    </style>

</head>
<body>
    <h1>Mọi page được chạy trên trang Index.php</h1>
    
    <h2>In kết quả dưới theo 3 cách: For, While, Do-While</h2>

    <div class="output-container">
        <h3>For Loop Output:</h3>
        <div id="forOutput"></div>

        <h3>While Loop Output:</h3>
        <div id="whileOutput"></div>

        <h3>Do-While Loop Output:</h3>
        <div id="doWhileOutput"></div>
    </div>
    
    <script>
        window.onload = function() {
    // Using For Loop
    let forOutput = "";

    for (let i = 1; i <= 5; i++) {
        for (let j = 1; j <= i; j++) {
            forOutput += "*";
        }
        forOutput += "\n";
    }

    document.getElementById("forOutput").textContent = forOutput;

    // Using While Loop
    let whileOutput = "";
    let i = 1;
    while (i <= 5) {
        let j = 1;
        while (j <= i) {
            whileOutput += "*";
            j++;
        }
        whileOutput += "\n";
        i++;
    }

    document.getElementById("whileOutput").textContent = whileOutput;

    // Using Do-While Loop
    let doWhileOutput = "";
    i = 1;
    do {
        let j = 1;
        do {
            doWhileOutput += "*";
            j++;
        } while (j <= i);
        doWhileOutput += "\n";
        i++;
    } while (i <= 5);
    document.getElementById("doWhileOutput").textContent = doWhileOutput;
}

    </script>
</body>
</html>
