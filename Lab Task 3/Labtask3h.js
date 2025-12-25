function checkAssignment() {
    var name = document.getElementById("name").value.trim();
    var email = document.getElementById("email").value.trim();
    var male = document.getElementById("male").checked;
    var female = document.getElementById("female").checked;
    var others = document.getElementById("others").checked;
    var day = document.getElementById("day").value;
    var month = document.getElementById("month").value;
    var year = document.getElementById("year").value;
    var ssc = document.getElementById("ssc").checked;
    var hsc = document.getElementById("hsc").checked;
    var bsc = document.getElementById("bsc").checked;
    var bloodGroup = document.getElementById("bloodGroup").value;
    var userId = document.getElementById("userId").value;
    var picture = document.getElementById("picture").value;
    var error = document.getElementById("error");

    if (name === "") {
        error.textContent = "Name cannot be empty.";
        return false;
    }
    if (!/^[A-Za-z][A-Za-z.\-\s]*\s[A-Za-z.\-\s]+$/.test(name)) {
        error.textContent = "Name must contain at least two words and start with a letter.";
        return false;
    }

    if (email === "") {
        error.textContent = "Email cannot be empty.";
        return false;
    }
    if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email)) {
        error.textContent = "Invalid email address.";
        return false;
    }

    if (!male && !female && !others) {
        error.textContent = "Please select your gender.";
        return false;
    }

    if (day === "" || month === "" || year === "") {
        error.textContent = "Date fields cannot be empty.";
        return false;
    }
    if (day < 1 || day > 31) {
        error.textContent = "Day must be between 1 and 31.";
        return false;
    }
    if (month < 1 || month > 12) {
        error.textContent = "Month must be between 1 and 12.";
        return false;
    }
    if (year < 1900 || year > 2024) {
        error.textContent = "Year must be between 1900 and 2024.";
        return false;
    }

    if (!ssc && !hsc && !bsc) {
        error.textContent = "Please select at least one degree.";
        return false;
    }

    if (bloodGroup === "") {
        error.textContent = "Please select your blood group.";
        return false;
    }

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
