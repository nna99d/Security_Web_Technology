document.getElementById("lopForm").addEventListener("submit", function(event) {
    event.preventDefault(); 

    const maLop = document.getElementById("maLop").value.trim();
    const tenLop = document.getElementById("tenLop").value.trim();
    const giaoVien = document.getElementById("giaoVien").value.trim();
    const soSinhVien = document.getElementById("soSinhVien").value;

    let valid = true;

    if (!/^[A-Za-z0-9]+$/.test(maLop)) {
        valid = false;
        showError("maLopError", "Mã lớp chỉ chứa ký tự chữ và số.");
    } else {
        hideError("maLopError");
    }

    if (!/^[A-Za-z0-9]+$/.test(tenLop)) {
        valid = false;
        showError("tenLopError", "Tên lớp chỉ chứa ký tự chữ và số.");
    } else {
        hideError("tenLopError");
    }

    if (giaoVien.length < 2 || giaoVien.length > 50) {
        valid = false;
        showError("giaoVienError", "Tên giáo viên phải từ 2 đến 50 ký tự.");
    } else {
        hideError("giaoVienError");
    }

    if (soSinhVien < 1 || soSinhVien > 100 || isNaN(soSinhVien)) {
        valid = false;
        showError("soSinhVienError", "Số sinh viên phải từ 1 đến 100.");
    } else {
        hideError("soSinhVienError");
    }

    if (valid) {
        alert("Dữ liệu hợp lệ! Lưu thông tin thành công.");
    }
});

function showError(id, message) {
    const errorElement = document.getElementById(id);
    errorElement.style.visibility = "visible";
    errorElement.textContent = message;
}

function hideError(id) {
    const errorElement = document.getElementById(id);
    errorElement.style.visibility = "hidden";
    errorElement.textContent = "";
}
