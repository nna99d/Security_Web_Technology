
<?php 
 $mysqli = new mysqli("localhost","root","","my_web");

// check connection 
 if($mysqli -> connect_errno) {
    echo "Ket noi MYSQLi loi : " .$mysqli -> connect_error;
    exit();
 }else {
    echo "kết nối thành công ";
 }
?> 