let inputs = document.querySelectorAll("input, textarea");

inputs.forEach((input, index) => {
    input.addEventListener("keypress", function(event) {
        if (event.key === "Enter") {
            event.preventDefault(); 
            let nextInput = inputs[index + 1]; 
            if (nextInput) {
                nextInput.focus();
            }
        }
    });
});

document.getElementById("name").addEventListener("blur", function() {
    let nameField = document.getElementById("name");
    let name = nameField.value.trim().replace(/\s+/g, ' ').toLowerCase().split(" ");
    let formattedName = name.map(word => word.charAt(0).toUpperCase() + word.slice(1)).join(" ");
    nameField.value = formattedName;
});


document.getElementById("email").addEventListener("blur", function() {
    let emailField = document.getElementById("email");
    let email = emailField.value;
    let emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;
    if (!emailPattern.test(email)) {
        document.getElementById("emailError").textContent = "Email không hợp lệ.";
    } else {
        document.getElementById("emailError").textContent = "";
    }
});

document.getElementById("birthdate").addEventListener("input", function() {
    let birthdateField = document.getElementById("birthdate");
    let value = birthdateField.value.replace(/\D/g, '');
    if (value.length >= 2) value = value.slice(0, 2) + '/' + value.slice(2);
    if (value.length >= 5) value = value.slice(0, 5) + '/' + value.slice(5);
    birthdateField.value = value;
});

document.getElementById("confirmPassword").addEventListener("blur", function() {
    let password = document.getElementById("password").value;
    let confirmPassword = document.getElementById("confirmPassword").value;
    if (password !== confirmPassword) {
        document.getElementById("passwordError").textContent = "Mật khẩu gõ lại không đúng.";
    } else {
        document.getElementById("passwordError").textContent = "";
    }
});

document.getElementById("registrationForm").addEventListener("submit", function(event) {
    let requiredFields = document.querySelectorAll("input[required]");
    let allValid = true;

    requiredFields.forEach(field => {
        if (!field.value) {
            document.getElementById(field.id + "Error").textContent = "Trường này là bắt buộc.";
            allValid = false;
        } else {
            document.getElementById(field.id + "Error").textContent = "";
        }
    });

    if (!allValid) {
        event.preventDefault();
    }
});
