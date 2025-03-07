<?php
    $idStudent =  $nameStudent =$genderStudent =$addressStudent=$emailStudent=$classIdStudent = "";
    if(isset($_POST['detail'])) {
        $idStudent = $_POST['idStudent'];
        $nameStudent = $_POST['nameStudent'];
        $genderStudent = $_POST['genderStudent'];
        $addressStudent = $_POST['addressStudent'];
        $emailStudent = $_POST['emailStudent'];
        $classIdStudent = $_POST['classIdStudent'];
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div>
        <h3>Chi tiết sinh viên:</h3>
        <div>
            <?php
                echo "ID: ".$idStudent."</br>";
                echo "Tên: ".$nameStudent."</br>";
                echo "Giới tính: ".$genderStudent."</br>";
                echo "Email: ".$emailStudent."</br>";
                echo "ClassID: ".$classIdStudent."</br>";
            ?>
        </div>
    </div>
</body>

</html>