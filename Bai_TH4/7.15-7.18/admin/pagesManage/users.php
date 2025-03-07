<?php
 
    $rootDir = realpath($_SERVER["DOCUMENT_ROOT"])."/Website-laptop/";
    require_once ($rootDir.'configs/database.php');
    mysqli_select_db($connection_obj, DATABASE_NAME);
    $queryGetAllUser = "SELECT * FROM users";
    $resultAllUser = mysqli_query($connection_obj, $queryGetAllUser) or die(mysqli_error($connection_obj));

    if(isset($_POST["submit-add-user"])) {
        if(!empty($_POST['username-add']) && !empty($_POST['fullname-add']) && !empty($_POST['password-add']) && isset($_FILES['image-add']) && !empty($_POST['address-add']) && !empty($_POST['birthday-add'])) {
            
            $username = $_POST['username-add'];
            $fullname = $_POST['fullname-add'];
            $password = $_POST['password-add'];
            $address = $_POST['address-add'];
            $birthday = $_POST['birthday-add'];
            // Image upload
                $files = $_FILES['image-add'];
                $names = $files['name'];
                $types = $files['type'];
                $tmp_names = $files['tmp_name'];
                $errors = $files['error'];
                $sizes = $files['size'];  
            move_uploaded_file($tmp_names, $rootDir.'images/'.$names);
            $pathImage = "http://localhost/Website-laptop/images/".$names;
            // Add to database
            $queryAddNewUser = "INSERT INTO users(`UserName`,`Password`, `Fullname`,`Birthday`,`Address`,`Image`)
            VALUES ('". mysqli_real_escape_string($connection_obj, $username) ."','". mysqli_real_escape_string($connection_obj, $password) ."','". mysqli_real_escape_string($connection_obj, $fullname) ."','". mysqli_real_escape_string($connection_obj, $birthday) ."','". mysqli_real_escape_string($connection_obj, $address) ."','". mysqli_real_escape_string($connection_obj, $pathImage) ."')";
            // run the insert query
            mysqli_query($connection_obj, $queryAddNewUser);   
        
            header("location: ../index.php");
        }
    }
    if(isset($_POST["reset-add-user"])) {
        header("location: ../index.php");
    }
    if(isset($_POST["delete-user"])) {
        $idUserDelete = $_POST['id-delete'];
        // prepare the insert query
        $queryDeleteUser = "DELETE FROM users WHERE `ID` = '". $idUserDelete ."'";
        
        // run the delete query
        mysqli_query($connection_obj, $queryDeleteUser);
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
    <script src="http://localhost/Website-laptop/ckeditor/ckeditor.js"></script>
    <script type="text/javascript" src="http://localhost/Website-laptop/ckeditor/samples/sample.js"></script>
    <!-- <link rel="stylesheet" type="text/css" href="http://localhost/Website-laptop/ckeditor/samples/css/samples.css"> -->
    <style>
    .table-user {
        width: 100%;
    }

    .table-user tr {
        background: none !important;
    }

    .table-user tr td {
        text-align: center;
    }

    .function {
        display: flex;
        justify-content: center;
        gap: 5px;
        align-items: center;
    }
    </style>
</head>

<body>
    <div class="users-container">
        <h3>Quản lý người dùng</h3>
        <div class="">
            <table class="table-bordered table-user">
                <tr>
                    <td>STT</td>
                    <td>Username</td>
                    <td>Password</td>
                    <td>Fullname</td>
                    <td>Birthday</td>
                    <td>Address</td>
                    <td>Image</td>
                    <td>Chức năng</td>
                </tr>
                <?php
                    while ($row = mysqli_fetch_array($resultAllUser, MYSQLI_BOTH)) {
                        $id = $row["ID"];
                        $username = $row["UserName"];
                        $password = $row["Password"];
                        $fullname = $row["Fullname"];
                        $birthday = $row["Birthday"];
                        $address = $row["Address"];
                        $image = $row["Image"];
                        echo "<tr>";
                            echo "<td>$id</td>";
                            echo "<td>$username</td>";
                            echo "<td>$password</td>";
                            echo "<td>$fullname</td>";
                            echo "<td>$birthday</td>";
                            echo "<td>$address</td>";
                            echo "<td>";
                                echo "<img class='avatar-user' src='$image' alt=''>";
                            echo "</td>";
                            echo "<td class='function'>";
                                echo "<form method='POST' action='http://localhost/Website-laptop/admin/pagesManage/editUser.php'>";
                                    echo "<input type='hidden' name='id' value='$id' />";
                                    echo "<input type='hidden' name='username' value='$username' />";
                                    echo "<input type='hidden' name='password' value='$password' />";
                                    echo "<input type='hidden' name='fullname' value='$fullname' />";
                                    echo "<input type='hidden' name='birthday' value='$birthday' />";
                                    echo "<input type='hidden' name='address' value='$address' />";
                                    echo "<input type='hidden' name='image' value='$image' />";
                                    echo "<input class='btn btn-primary' type='submit' name='edit-user' value='Sửa' />";
                                echo "</form>";
                                echo "<form method='POST' action='http://localhost/Website-laptop/admin/pagesManage/users.php'>";
                                    echo "<input type='hidden' name='id-delete' value='$id' />";
                                    echo "<input class='btn btn-danger' type='submit' name='delete-user' value='Xóa'>";
                                echo "</form>";
                            echo "</td>";
                        echo "</tr>";
                    }
                ?>
            </table>
            <div class="mt-3">
                <h3>Thêm User:</h3>
                <form action="http://localhost/Website-laptop/admin/pagesManage/users.php" method="POST"
                    enctype="multipart/form-data" class="row">
                    <div class="form-group mb-3 col-6">
                        <label for="">Username:</label>
                        <input class="form-control" type="text" name="username-add" value="" />
                    </div>
                    <div class="form-group mb-3 col-6">
                        <label for="">Password:</label>
                        <input class="form-control" type="password" name="password-add" value="" />
                    </div>
                    <div class="form-group mb-3 col-6">
                        <label for="">Birthday:</label>
                        <input class="form-control" type="text" name="birthday-add" value="" />
                    </div>
                    <div class="form-group mb-3 col-6">
                        <label for="">Address:</label>
                        <input class="form-control" type="text" name="address-add" value="" />
                    </div>
                    <div class="form-group mb-3 col-6">
                        <label for="">Image:</label>
                        <input class="form-control" type="file" name="image-add" value="" />
                    </div>
                    <div class="form-group mb-3 col-12">
                        <label for="">Fullname:</label>
                        <!-- <input class="form-control" type="text" name="fullname-add" value="" /> -->
                        <textarea class="form-control" id="fullname-add" name="fullname-add" value=""></textarea>
                        <script>
                        CKEDITOR.replace('fullname-add');
                        </script>
                    </div>
                    <div class="col-6">
                        <input class="btn btn-primary" type="submit" name="submit-add-user" value="Thêm" />
                        <input class="btn btn-danger" type="submit" name="reset-add-user" value="Nhập lại" />
                    </div>
                </form>
            </div>
        </div>
    </div>

</body>

</html>