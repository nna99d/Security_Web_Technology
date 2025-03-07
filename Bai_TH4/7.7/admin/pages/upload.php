<?php
    
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="http://localhost/Lab3-PHP/css/center.css">
</head>

<body>
    <div class="associate-arr-container">
        <form action="" method="post" enctype="multipart/form-data">
            <div class="mt-3">
                <label for="">File 1:</label>
                <input type="file" name="fileToUpload[]" id="fileToUpload">
            </div>
            <div class="mt-3">
                <label for="">File 2:</label>
                <input type="file" name="fileToUpload[]" id="fileToUpload">
            </div>
            <div class="mt-3">
                <label for="">File 3:</label>
                <input type="file" name="fileToUpload[]" id="fileToUpload">
            </div>
            <div class="mt-3">
                <label for="">File 4:</label>
                <input type="file" name="fileToUpload[]" id="fileToUpload">
            </div>
            <div class="mt-3">
                <label for="">File 5:</label>
                <input type="file" name="fileToUpload[]" id="fileToUpload">
            </div>
            <div class="mt-3">
                <label for="">File 6:</label>
                <input type="file" name="fileToUpload[]" id="fileToUpload">
            </div>
            <div class="mt-3">
                <label for="">File 7:</label>
                <input type="file" name="fileToUpload[]" id="fileToUpload">
            </div>
            <div class="mt-3">
                <label for="">File 8:</label>
                <input type="file" name="fileToUpload[]" id="fileToUpload">
            </div>
            <div class="mt-3">
                <label for="">File 9:</label>
                <input type="file" name="fileToUpload[]" id="fileToUpload">
            </div>
            <div class="mt-3">
                <label for="">File 10:</label>
                <input type="file" name="fileToUpload[]" id="fileToUpload">
            </div>
            <div class="mt-3">
                <button class="btn btn-danger" type="button">Reset</button>
                <input class="btn btn-primary" type="submit" value="Upload" name="submitUpload">
            </div>
        </form>
    </div>

</body>
<script>
var fileToUpload = document.querySelectorAll("input[name='fileToUpload[]'")
var btnReset = document.querySelector(".btn-danger")
btnReset.addEventListener("click", function() {
    fileToUpload.forEach(function(file) {
        file.value = ""
    })
})
</script>

</html>