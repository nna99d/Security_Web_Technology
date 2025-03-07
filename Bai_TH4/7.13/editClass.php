<?php
session_start();
require_once "./configs/database.php";
mysqli_select_db($connection_obj, DATABASE_NAME);
     $tenlopEditClass = $khoahocEditClass = $gvcnEditClass = "";
     
    if(isset($_POST['edit_class'])) {
        $_SESSION['malopEditClass'] = $_POST['malop_edit'];       
        $tenlopEditClass = $_POST['tenlop_edit'];           
        $khoahocEditClass = $_POST['khoahoc_edit'];           
        $gvcnEditClass = $_POST['gvcn_edit'];           
    }

    $malopEditNewClass = $tenlopEditNewClass = $khoahocEditNewClass = $gvcnEditNewClass = "";
    if(isset($_POST['save_class'])) {
        if(!empty($_POST['malopEditNewClass']) && !empty($_POST['tenlopEditNewClass'])&& !empty($_POST['khoahocEditNewClass']) && !empty($_POST['gvcnEditNewClass'])) {
            $malopEditNewClass =$_POST['malopEditNewClass'];
             $tenlopEditNewClass = $_POST['tenlopEditNewClass'];
             $khoahocEditNewClass = $_POST['khoahocEditNewClass'];
             $gvcnEditNewClass = $_POST['gvcnEditNewClass'];
             echo $_SESSION['malopEditClass'];



        $malopEditClass = $_SESSION['malopEditClass'];
        $queryUpdateMaLopClass = "UPDATE LOP SET MALOP = '".$malopEditNewClass."' WHERE MALOP = '". $malopEditClass ."'";
        $queryUpdateTenLopClass = "UPDATE LOP SET TENLOP = '". $tenlopEditNewClass ."' WHERE MALOP = '".  $malopEditClass ."'";
        $queryUpdateKhoaHocClass = "UPDATE LOP SET KHOAHOC = '". $khoahocEditNewClass ."' WHERE `MALOP` = '".  $malopEditClass ."'";
        $queryUpdateGVCNClass =  "UPDATE LOP SET GVCN ='".$gvcnEditNewClass."' WHERE MALOP='". $malopEditClass ."'";
   
        mysqli_query($connection_obj, $queryUpdateMaLopClass);    
        mysqli_query($connection_obj, $queryUpdateTenLopClass);    
        mysqli_query($connection_obj, $queryUpdateKhoaHocClass); 
        mysqli_query($connection_obj, $queryUpdateGVCNClass);    
        }
        session_destroy();
        mysqli_close($connection_obj);
        header("location: ./index.php");

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
    
                <h3>Sửa lớp:</h3>
                <form class="row" action="" method="POST">
                    <div>
                        <label for="">Mã lớp:</label>
                        <input class="form-control mb-3" type="text" name="malopEditNewClass" value="<?=$_SESSION['malopEditClass']?>" />
                    </div>
                    <div>
                        <label for="">Tên lớp:</label>
                        <input class="form-control mb-3" type="text" name="tenlopEditNewClass" value="<?=$tenlopEditClass?>" />
                    </div>
                    <div>
                        <label for="">Khóa học:</label>
                        <input class="form-control mb-3" type="text" name="khoahocEditNewClass" value="<?=$khoahocEditClass?>" />
                    </div>
                    <div>
                        <label for="">GVCN:</label>
                        <input class="form-control mb-3" type="text" name="gvcnEditNewClass" value="<?=$gvcnEditClass?>" />
                    </div>
                    <div>
                        <input class="btn btn-primary" type="submit" name="save_class" value="Lưu"/>
                        <input class="btn btn-danger" type="submit" name="reset_class" value="Nhập lại"/>
                    </div>
                    
                </form>
</body>
</html>