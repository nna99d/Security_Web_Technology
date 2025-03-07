
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    table.draw-table {
        border-collapse: collapse;
        width: 50%;
        margin: 20px auto;
        font-family: Arial, sans-serif;
    }
    table.draw-table td {
        border: 2px solid #ddd;
        padding: 10px;
        text-align: center;
        font-size: 18px;
        color: #333;
        padding:17px 33px;
    }
    table.draw-table tr:nth-child(even) {
        background-color: #f2f2f2;
    }
    table.draw-table tr:hover {
        background-color: #ddd;
    }
    table.draw-table td {
        background-color: #f9f9f9;
        transition: background-color 0.3s ease;
    }
    table.draw-table td:hover {
        background-color: #ffc;
    }
</style>
</head>
<body>
<h2>Trang DrawTable: Vẽ bảng</h2>

<table class="draw-table">
    <tr>
        <td >1</td> <td >2</td> <td >3</td> <td >4</td> <td >5</td> <td >6</td> <td >7</td> <td >8</td> <td >9</td>
    </tr>
    <tr>
        <td >9</td > <td >8</td > <td >7</td> <td >6</td> <td >5</td> <td >4</td> <td >3</td> <td >2</td> <td >1</td>
    </tr>
    <tr>
        <td >1</td> <td >2</td> <td >3</td> <td >4</td> <td >5</td> <td >6</td> <td >7</td> <td >8</td> <td >9</td>
    </tr>
    <tr>
        <td >9</td> <td >8</td> <td >7</td> <td >6</td> <td >5</td> <td >4</td> <td >3</td> <td >2</td> <td >1</td>
    </tr>
</table>

</body>
</html>