function checkBloodGroup() {
    var bloodGroup = document.getElementById("bloodGroup").value;
    var error = document.getElementById("error");

    if (bloodGroup === "") {
        error.innerHTML = "Please select your blood group.";
        return false;
    }

    error.innerHTML = "";
    return true;
}
