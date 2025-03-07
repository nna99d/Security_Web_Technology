<?php
require_once "./configs/database.php";

mysqli_select_db($connection_obj, DATABASE_NAME);
// prepare the select query
$queryGetAllClasses = "SELECT * FROM classes";
// $queryGetAllStudentsByClassId = "SELECT * FROM students";
 
// execute the select query
$resultClasses = mysqli_query($connection_obj, $queryGetAllClasses) or die(mysqli_error($connection_obj));
// $result2 = mysqli_query($connection_obj, $query2) or die(mysqli_error($connection_obj));
 


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
    <style>
    .container {
        display: flex;
    }

    .table-student {
        width: 100%;
    }

    .table-student tr {
        background: none !important;
    }

    .table-student tr td {
        text-align: center;
    }

    .content-left {
        width: 50%;
    }

    .content-right {
        width: 50%;
    }
    </style>
</head>

<body>
    <div class="container">
        <div class="content-left ">
            <h3>Danh sách các lớp:</h3>
            <div>
                <?php
                    while ($row = mysqli_fetch_array($resultClasses, MYSQLI_BOTH)) {
                        $nameClasses = $row['ClassName'];
                        $idClasses = $row['ID'];
                        echo "<a href='index.php?page=listStudentsInClass&idClasses=$idClasses'>$nameClasses</a>"."</br>";
                    }
                ?>
            </div>
        </div>


        <div class="content-right">
            <?php
                if(isset($_GET['page']) && $_GET['idClasses']) {
                    $currentClass = $_GET['idClasses'];
                    $queryNameCurrentClass = "SELECT ClassName FROM classes WHERE ID='$currentClass'";
                    $resultNameClasses = mysqli_query($connection_obj, $queryNameCurrentClass) or die(mysqli_error($connection_obj));
                    while ($row = mysqli_fetch_array($resultNameClasses, MYSQLI_BOTH)) {
                        $nameClasses = $row['ClassName'];
                        echo "<h3>DANH SÁCH SINH VIÊN TRONG LỚP $nameClasses</h3>";
                    }
                    echo "<table class='table-bordered table-student'>";                    
                    echo "<tr>";
                        echo "<td>Tên</td>";
                        echo "<td>Địa chỉ</td>";
                        echo "<td>Giới tính</td>";
                        echo "<td>Thao tác</td>";
                    echo "</tr>";
                    $idClasses = $_GET['idClasses'];
                    $queryGetAllStudentsByClassId = "SELECT * FROM students WHERE ClassID = $idClasses";
                    $resultAllStudentsByClassId = mysqli_query($connection_obj, $queryGetAllStudentsByClassId) or die(mysqli_error($connection_obj));
                    while ($row = mysqli_fetch_array($resultAllStudentsByClassId, MYSQLI_BOTH)) {
                        $ID = $row['ID'];
                        $studentName = $row['StudentName'];
                        $studentAddress = $row['StudentAddress'];
                        $studentGender= $row['StudentGender'];
                        $studentEmail= $row['StudentEmail'];
                        $studentClassId= $row['ClassID'];
                        echo "<tr>";
                            echo "<td>$studentName</td>";
                            echo "<td>$studentAddress</td>";
                            echo "<td>$studentGender</td>";
                            echo "<td>";
                                echo "<form action='./pages/studentDetail.php' method='POST'>";
                                    echo "<input type='hidden' name='idStudent' value='$ID'>";
                                    echo "<input type='hidden' name='nameStudent' value='$studentName'>";
                                    echo "<input type='hidden' name='addressStudent' value='$studentAddress'>";
                                    echo "<input type='hidden' name='genderStudent' value='$studentGender'>";
                                    echo "<input type='hidden' name='emailStudent' value='$studentEmail'>";
                                    echo "<input type='hidden' name='classIdStudent' value='$studentClassId'>";
                                    echo "<input class='btn btn-primary' type='submit' name='detail' value='Chi tiết' />";
                                echo "</form>";
                            echo "</td>";
                        echo "</tr>";
                    }
                    echo "</table>";
                }
                mysqli_close($connection_obj);
            ?>
        </div>
    </div>
</body>

</html>