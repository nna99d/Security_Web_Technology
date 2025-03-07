

<?php  
if ($_SERVER['REQUEST_METHOD'] == 'POST') {  
    $uploadDir = './uploads ';  
    if (!is_dir($uploadDir)) {  
        mkdir($uploadDir, 0777, true);  
    }  

    $files = $_FILES['files'];  
    $fileCount = count($files['name']);  
    $uploadedFiles = [];  

    for ($i = 0; $i < $fileCount; $i++) {  
        $fileName = basename($files['name'][$i]);  
        $targetFilePath = $uploadDir . $fileName;  

        if (move_uploaded_file($files['tmp_name'][$i], $targetFilePath)) {  
            $uploadedFiles[] = $fileName;  
        }  
    }  

    header('Location: ./loop.php');  
    exit();  
}  
?>