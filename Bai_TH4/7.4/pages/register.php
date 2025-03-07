
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Đăng Ký</title>
    <style>
        .form-container {
            margin-right:200px;
        }
      .form_name {
       border:1px solid transparent;
       border-radius:5px;
       outline:none;
       padding:8px;
       margin-left:33px;
      }
      .form_address {
        border:1px solid transparent;
       border-radius:5px;
       outline:none;
       padding:8px;
       margin-left:15px;
      }
      .form_job {
        border:1px solid transparent;
       border-radius:5px;
       outline:none;
       padding:8px;
       margin-left:27px;
      }
      .form-group {
        margin-bottom:14px;
      }
      .label_group {
        margin-right:213px;
      }
      .label_group.label_group--note {
        margin-right:232px;
      }
      .form_tilte {
        margin-left:274px;
      }

    </style>
</head>
<body>
<script>
    function submitForm(event) {
            event.preventDefault(); // Ngăn chặn hành vi mặc định của form

            var form = document.getElementById("registerForm");
            var formData = new FormData(form); // Lấy dữ liệu từ form

            var xhr = new XMLHttpRequest();
            xhr.open("POST", "./pages/submit.php", true); // Gửi dữ liệu tới submit.php
            xhr.onload = function () {
                if (xhr.status === 200) {
                    document.getElementById("result").innerHTML = xhr.responseText; // Hiển thị kết quả trả về
                }
            };
            xhr.send(formData); // Gửi dữ liệu
        }
        function hideForm() {
            document.getElementById('registerForm').style.display = 'none';
    }
 


</script>


<div class="form-container"   >
        
        <form  id = "registerForm"    onsubmit = "submitForm(event)">
        <h2 class= "form_tilte">Form Đăng Ký</h2>
            <div class="form-group">
                <label class= "label_group" for="name">Tên:</label>
                <input class = "form_name " type="text" id="name" name="name" placeholder="Nhập tên của bạn" required>
            </div>
            <div class="form-group">
                <label class= "label_group"  for="address">Địa chỉ:</label>
                <input class = "form_address  "  type="text" id="address" name="address" placeholder="Nhập địa chỉ của bạn" required>
            </div>
            <div class="form-group">
                <label  class= "label_group" for="job">Nghề:</label>
                <input class = "form_job "  type="text" id="job" name="job" placeholder="Nhập nghề của bạn">
            </div>
            <div class="form-group">
                <label class= "label_group  label_group--note"  for="note">Ghi chú:</label>
                <textarea id="note" name="note" rows="3" placeholder="Ghi chú thêm"></textarea>
            </div>
            <div class="form-group">
                 <button type="button" class="cancel-button" onclick="hideForm()">Xóa</button>
                <button type="submit"  onclick="hideForm()" >Đăng Ký</button>
            </div>
        </form>
    </div>
  

    <div id="result" class="result-container">
        <!-- Kết quả sẽ được hiển thị ở đây -->
       
    </div>





</body>
</html>
