
<?php 
 $mysqli = new mysqli("localhost","root","","my_web");

// check connection 
 if($mysqli -> connect_errno) {
    echo "Có lỗi khi kết nối MySQL : " .$mysqli -> connect_error;
    exit();
 }else {
    echo "Kết nối thành công!! ";
 }
?> 