document.getElementById("hosoForm").addEventListener("submit", function(event) {
    event.preventDefault();

    const maHoso = document.getElementById("maHoso").value.trim();
    const ten = document.getElementById("ten").value.trim();
    const ngaySinh = document.getElementById("ngaySinh").value;
    const diaChi = document.getElementById("diaChi").value.trim();
    const email = document.getElementById("email").value.trim();

    let valid = true;

    if (!/^[A-Za-z0-9]+$/.test(maHoso)) {
        valid = false;
        showError("maHosoError", "Mã hồ sơ chỉ chứa ký tự chữ và số.");
    } else {
        hideError("maHosoError");
    }

    if (!/^[A-Za-z\s]+$/.test(ten) || ten.length < 2 || ten.length > 50) {
        valid = false;
        showError("tenError", "Họ và tên chỉ chứa ký tự chữ và từ 2 đến 50 ký tự.");
    } else {
        hideError("tenError");
    }

    if (!ngaySinh || new Date(ngaySinh) > new Date()) {
        valid = false;
        showError("ngaySinhError", "Ngày sinh không hợp lệ.");
    } else {
        hideError("ngaySinhError");
    }

    if (diaChi.length < 5) {
        valid = false;
        showError("diaChiError", "Địa chỉ phải chứa ít nhất 5 ký tự.");
    } else {
        hideError("diaChiError");
    }

    if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email)) {
        valid = false;
        showError("emailError", "Email không hợp lệ.");
    } else {
        hideError("emailError");
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
