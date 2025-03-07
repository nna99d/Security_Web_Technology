<?php
session_start();

    $rootDir = realpath($_SERVER["DOCUMENT_ROOT"])."/Website-laptop/";
    require_once ($rootDir.'configs/database.php');
    mysqli_select_db($connection_obj, DATABASE_NAME);
    $queryGetAllUser = "SELECT * FROM users";
    $resultAllUser = mysqli_query($connection_obj, $queryGetAllUser) or die(mysqli_error($connection_obj));
    $username=$password=$fullname=$address=$image=$birthday="";
    if(isset($_POST['edit-user'])) {
        $_SESSION['id-user-edit'] = $_POST['id']; 
        $username = $_POST['username'];
        $fullname = $_POST['fullname'];
        $password = $_POST['password'];
        $address = $_POST['address'];
        $birthday = $_POST['birthday'];
        $image = $_POST['image'];
    }
    if(isset($_POST['submit-edit-user'])) {
        if(!empty($_POST['username-edit']) && !empty($_POST['fullname-edit']) && !empty($_POST['password-edit']) && isset($_FILES['image-edit']) && $_FILES['image-edit']['name'] !==''  && !empty($_POST['address-edit']) && !empty($_POST['birthday-edit'])) {
            echo "vẫn vào đcc";
            $usernameEdit = $_POST['username-edit'];
            $fullnameEdit = $_POST['fullname-edit'];
            $passwordEdit = $_POST['password-edit'];
            $addressEdit = $_POST['address-edit'];
            $birthdayEdit = $_POST['birthday-edit'];

            // Image upload
            $files = $_FILES['image-edit'];
            $names = $files['name'];
            $types = $files['type'];
            $tmp_names = $files['tmp_name'];
            $errors = $files['error'];
            $sizes = $files['size'];  
            move_uploaded_file($tmp_names, $rootDir.'images/'.$names);
            $pathImageEdit = "http://localhost/Website-laptop/images/".$names;
            // Add to database
            $idUserEdit = $_SESSION['id-user-edit'];
            $queryUpdateUsernameUser = "UPDATE users SET UserName = '".$usernameEdit."' WHERE ID = '". $idUserEdit ."'";
            $queryUpdateFullnameUser = "UPDATE users SET Fullname = '".$fullnameEdit."' WHERE ID = '". $idUserEdit ."'";
            $queryUpdatePasswordUser = "UPDATE users SET Password = '".$passwordEdit."' WHERE ID = '". $idUserEdit ."'";
            $queryUpdateAddressUser = "UPDATE users SET Address = '".$addressEdit."' WHERE ID = '". $idUserEdit ."'";
            $queryUpdateBirthdayUser = "UPDATE users SET Birthday = '".$birthdayEdit."' WHERE ID = '". $idUserEdit ."'";
            $queryUpdateImageUser = "UPDATE users SET Image = '".$pathImageEdit."' WHERE ID = '". $idUserEdit ."'";
    
            mysqli_query($connection_obj, $queryUpdateUsernameUser);    
            mysqli_query($connection_obj, $queryUpdateFullnameUser);    
            mysqli_query($connection_obj, $queryUpdatePasswordUser);    
            mysqli_query($connection_obj, $queryUpdateAddressUser);    
            mysqli_query($connection_obj, $queryUpdateBirthdayUser);    
            mysqli_query($connection_obj, $queryUpdateImageUser);     

        }
        header("location: ../index.php");
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
</head>

<body>
    <div class="edit-user-container">
        <h3>Sửa User:</h3>
        <form action="" method="POST" enctype="multipart/form-data" class="row">
            <div class="form-group mb-3 col-6">
                <label for="">Username:</label>
                <input class="form-control" type="text" name="username-edit" value="<?=$username?>" />
            </div>
            <div class="form-group mb-3 col-6">
                <label for="">Password:</label>
                <input class="form-control" type="password" name="password-edit" value="<?=$password?>" />
            </div>
            <div class="form-group mb-3 col-6">
                <label for="">Fullname:</label>
                <input class="form-control" type="text" name="fullname-edit" value="<?=$fullname?>" />
            </div>
            <div class="form-group mb-3 col-6">
                <label for="">Birthday:</label>
                <input class="form-control" type="text" name="birthday-edit" value="<?=$birthday?>" />
            </div>
            <div class="form-group mb-3 col-6">
                <label for="">Address:</label>
                <input class="form-control" type="text" name="address-edit" value="<?=$address?>" />
            </div>
            <div class="form-group mb-3 col-6">
                <label for="">Image:</label>
                <input class="form-control" type="file" name="image-edit" value="" />
            </div>
            <div class="form-group mb-3 col-6">
                <p>Ảnh cũ: </p>
                <img style="width: 100px;height: 100px" src="<?=$image?>" alt="">
            </div>
            <div>
                <input class="btn btn-primary" type="submit" name="submit-edit-user" value="Lưu" />
                <input class="btn btn-danger" type="submit" name="reset-edit-user" value="Nhập lại" />
            </div>
        </form>
    </div>
</body>

</html>