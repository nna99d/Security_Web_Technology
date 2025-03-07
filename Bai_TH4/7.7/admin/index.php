<?php
    session_start();
   $pageCenter = "./pages/adminHome.php";
   if(isset($_POST['returnHome'])) {
    header('location: http://localhost/PHP-7.7/index.php');
   }
   if(isset($_POST['adminHome'])) {
    $pageCenter = "./pages/adminHome.php";
   }
   if(isset($_POST['logout'])) {
    $pageCenter = "./pages/logout.php";
   }
   if(isset($_POST['upload'])) {
    $pageCenter = "./pages/upload.php";
   }


    $rootDir = realpath($_SERVER["DOCUMENT_ROOT"])."/PHP-7.7/";
    if(isset($_POST["submitUpload"])) {
        if(isset($_FILES['fileToUpload'])){
            $files = $_FILES['fileToUpload'];      
            $names = $files['name'];
            $types = $files['type'];
            $tmp_names = $files['tmp_name'];
            $errors = $files['error'];
            $sizes = $files['size'];

            //Số file được upload
            $numitems = count($names);
            $numfiles = 0;       
        }
        for ($i = 0; $i < $numitems; $i++) {
            if ($errors[$i] == 0) {
                $numfiles++;
                move_uploaded_file($tmp_names[$i], $rootDir.'uploads/'.$names[$i]);
            }
            // else {
            //     echo "No files selected."; 
            // }
        }
    }

    
    
//    session_start();
//    if(isset($_SESSION['username'])) {
//        echo "Welcome to Admin Page<br>";
//        echo "Username: " . $_SESSION['username'] .'<br>';
//        echo "<a href='./pages/logout.php'>Logout</a>";
//    }
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
    <link rel="stylesheet" href="../css/index.css">
</head>

<body>
    <div class="container-app">
        <?php include './pages/head.php';?>
        <div class="content">
            <?php include './pages/left.php' ;?>
            <div class="content-right">
                <?php include $pageCenter;?>
            </div>
        </div>
        <?php include '../components/footer.php' ;?>
    </div>
</body>

</html>