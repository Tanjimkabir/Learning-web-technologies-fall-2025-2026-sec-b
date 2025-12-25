function checkUserInfo() {
    var userId = document.getElementById("userId").value;
    var picture = document.getElementById("picture").value;
    var error = document.getElementById("error");

    if (userId === "") {
        error.textContent = "User ID cannot be empty.";
        return false;
    }

    if (userId <= 0) {
        error.textContent = "User ID must be a positive number.";
        return false;
    }

    if (picture === "") {
        error.textContent = "Please upload a picture.";
        return false;
    }

    error.textContent = "";
    alert("Form submitted successfully!");
    return true;
}
