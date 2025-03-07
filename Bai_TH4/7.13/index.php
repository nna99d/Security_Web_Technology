<?php
require_once "./configs/database.php";

mysqli_select_db($connection_obj, DATABASE_NAME);
// prepare the select query
$query = "SELECT * FROM LOP";
$query2 = "SELECT * FROM HOSO";
 
// execute the select query
$result = mysqli_query($connection_obj, $query) or die(mysqli_error($connection_obj));
$result2 = mysqli_query($connection_obj, $query2) or die(mysqli_error($connection_obj));
 

if(isset($_POST['delete_class'])) {
    $malop = $_POST['malop_delete'];
    // prepare the insert query
    $queryDeleteClass = "DELETE FROM LOP WHERE `MALOP` = '". $malop ."'";
    
    // run the delete query
    mysqli_query($connection_obj, $queryDeleteClass);
    header("location: ./index.php");
}

// if(isset($_POST['edit_file'])) {
//     $mahs = $_POST['hoso_edit'];
//     echo $mahs;
// }
// if(isset($_POST['delete_file'])) {
//     $mahs = $_POST['hoso_delete'];
//     echo $mahs;
// }

$checkAddClassSuccess = false;
$malopNew = $tenlopNew = $khoahocNew = $gvcnNew = "";
if(isset($_POST['submit_class'])) {
    $connection_obj = mysqli_connect(DATABASE_SERVER, DATABASE_USER, DATABASE_PASSWORD);
    if (!$connection_obj) {
        echo "Error No: " . mysqli_connect_errno();
        echo "Error Description: " . mysqli_connect_error();
        exit;
    }
    mysqli_select_db($connection_obj, DATABASE_NAME);
    if(!empty($_POST['malop']) && !empty($_POST['tenlop']) && !empty($_POST['khoahoc']) && !empty($_POST['gvcn'])) {
        $malopNew = $_POST['malop']; 
        $tenlopNew = $_POST['tenlop']; 
        $khoahocNew = $_POST['khoahoc']; 
        $gvcnNew = $_POST['gvcn']; 
        $queryAddNewClass = "INSERT INTO LOP(`MALOP`,`TENLOP`, `KHOAHOC`,`GVCN`)
        VALUES ('". mysqli_real_escape_string($connection_obj, $malopNew) ."','". mysqli_real_escape_string($connection_obj, $tenlopNew) ."','". mysqli_real_escape_string($connection_obj, $khoahocNew) ."','". mysqli_real_escape_string($connection_obj, $gvcnNew) ."')";
        header("location: ./index.php");
        // run the insert query
        mysqli_query($connection_obj, $queryAddNewClass);
 
    }

}

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
            gap: 10px;
        }
        .class-container {
            width: 50%;
        }
        .file-container {
            width: 50%;
        }
        .table-class, .table-file {
            width: 100%;
        }

        .table-class tr, .table-file tr {
            background: none !important;
        }

        .table-class tr td, .table-file tr td {
            text-align: center;
        }
        .form-file, .form-class {
            display: flex;
            align-items: center;
            justify-content: center;
            
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="class-container">
            <?php
                // run the select query
                echo "<h3>Thông tin lớp:</h3>";
                echo "<table class='table-class table-bordered'>";
                echo "<tr>";
                    echo "<td>Mã lớp</td>";
                    echo "<td>Tên lớp</td>";
                    echo "<td>Khóa học</td>";
                    echo "<td>GVCN</td>";
                    echo "<td>Chức năng</td>";
                echo "</tr>";
                while ($row = mysqli_fetch_array($result, MYSQLI_BOTH)) {
                    echo "<tr>";  
                        $malop = $row['MALOP'];
                        $tenlop = $row['TENLOP'];
                        $khoahoc = $row['KHOAHOC'];
                        $gvcn = $row['GVCN'];
                        echo "<td>$malop</td>";
                        echo "<td>$tenlop</td>";
                        echo "<td>$khoahoc</td>";
                        echo "<td>$gvcn</td>";
                        echo "<td  class='form-class'>";
                            echo "<form action='./editClass.php' method='POST'>"; 
                                echo "<input hidden type='text' value='$malop' name='malop_edit'/>";
                                echo "<input hidden type='text' value='$tenlop' name='tenlop_edit'/>";
                                echo "<input hidden type='text' value='$khoahoc' name='khoahoc_edit'/>";
                                echo "<input hidden type='text' value='$gvcn' name='gvcn_edit'/>";
                                echo "<input class='btn btn-primary me-1' type='submit' value='Sửa' name='edit_class'/>";
                            echo "</form>"; 
                            echo "<form action='' method='POST'>"; 
                                echo "<input hidden type='text' value='$malop' name='malop_delete'/>";
                                echo "<input class='btn btn-danger' type='submit' value='Xóa' name='delete_class'/>";
                            echo "</form>"; 
                        echo "</td>";
                    echo "</tr>";
                }
                echo "</table>";               
            ?>
            

                <h3>Thêm mới lớp:</h3>
                <form class="row" action="" method="POST">
                    <div>
                        <label for="">Mã lớp:</label>
                        <input class="form-control mb-3" type="text" name="malop" value="" />
                    </div>
                    <div>
                        <label for="">Tên lớp:</label>
                        <input class="form-control mb-3" type="text" name="tenlop" value="" />
                    </div>
                    <div>
                        <label for="">Khóa học:</label>
                        <input class="form-control mb-3" type="text" name="khoahoc" value="" />
                    </div>
                    <div>
                        <label for="">GVCN:</label>
                        <input class="form-control mb-3" type="text" name="gvcn" value="" />
                    </div>
                    <div>
                        <input class="btn btn-primary" type="submit" name="submit_class" value="Thêm"/>
                        <input class="btn btn-danger" type="submit" name="reset_class" value="Nhập lại"/>
                    </div>
                    <?php
                        if($checkAddClassSuccess) {
                            echo "<p style={color:'red'}>Thêm lớp thành công</p>";
                        }
                    ?>
                </form>
 
        </div>
        <div class="file-container">
        <?php
                // run the select query
                echo "<h3>Thông tin hồ sơ:</h3>";
                echo "<table class='table-file table-bordered'>";
                echo "<tr>";
                    echo "<td>Mã hồ sơ</td>";
                    echo "<td>Họ tên</td>";
                    echo "<td>Ngày sinh</td>";
                    echo "<td>Địa chỉ</td>";
                    echo "<td>Lớp</td>";
                    echo "<td>Điểm toán</td>";
                    echo "<td>Điểm lý</td>";
                    echo "<td>Điểm hóa</td>";
                    echo "<td>Chức năng</td>";

                echo "</tr>";
                while ($row = mysqli_fetch_array($result2, MYSQLI_BOTH)) {
                    echo "<tr>";  
                        $mahs = $row['MAHS'];
                        $hoten = $row['HOTEN'];
                        $ngaysinh = $row['NGAYSINH'];
                        $diachi = $row['DIACHI'];
                        $lop = $row['LOP'];
                        $diemtoan = $row['DIEMTOAN'];
                        $diemly = $row['DIEMLY'];
                        $diemhoa = $row['DIEMHOA'];
                        echo "<td>$mahs</td>";
                        echo "<td>$hoten</td>";
                        echo "<td>$ngaysinh</td>";
                        echo "<td>$diachi</td>";
                        echo "<td>$lop</td>";
                        echo "<td>$diemtoan</td>";
                        echo "<td>$diemly</td>";
                        echo "<td>$diemhoa</td>";
                        echo "<td  class='form-file'>";
                            echo "<form action='' method='POST'>"; 
                                echo "<input hidden type='text' value='$mahs' name='hoso_edit'/>";
                                echo "<input class='btn btn-primary me-1' type='submit' value='Sửa' name='edit_file'/>";
                            echo "</form>"; 
                            echo "<form action='' method='POST'>"; 
                                echo "<input hidden type='text' value='$mahs' name='hoso_delete'/>";
                                echo "<input class='btn btn-danger' type='submit' value='Xóa' name='delete_file'/>";
                            echo "</form>"; 
                        echo "</td>";
                    echo "</tr>";
                }
                // close the db connection
                mysqli_close($connection_obj);
            ?>
        </div>
    </div>
    
</body>
</html>