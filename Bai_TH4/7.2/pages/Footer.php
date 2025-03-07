<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Color Grid</title>
    <style>
        .container {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            grid-template-rows: repeat(3, 30px);
            gap: 5px;
            border: 2px solid black;
            width: 200px;
        }
        .box {
            border: 1px solid black;
        }
        .blue { background-color: blue; }
        .red { background-color: red; }
        .magenta { background-color: magenta; }
        .yellow { background-color: yellow; }
        .green { background-color: lime; }
        .gray { background-color: gray; }
        .lightblue { background-color: lightblue; }
        .lightgray { background-color: lightgray; }
        .orange { background-color: orange; }

        .blue { grid-column: span 1; grid-row: span 1; }
        .red { grid-column: span 1; grid-row: span 1; }
        .magenta { grid-column: span 1; grid-row: span 1; }
        .yellow { grid-column: span 1; grid-row: span 1; }
        .green { grid-column: span 1; grid-row: span 1; }
        .gray { grid-column: span 1; grid-row: span 1; }
        .lightblue { grid-column: span 1; grid-row: span 1; }
        .lightgray { grid-column: span 1; grid-row: span 1; }
        .orange { grid-column: span 1; grid-row: span 1; }
    </style>
</head>
<body>

    <div class="container">
        <div class="box blue"></div>
        <div class="box red"></div>
        <div class="box magenta"></div>
        <div class="box yellow"></div>
        <div class="box green"></div>
        <div class="box gray"></div>
        <div class="box lightblue"></div>
        <div class="box lightgray"></div>
        <div class="box orange"></div>
    </div>

</body>
</html>
