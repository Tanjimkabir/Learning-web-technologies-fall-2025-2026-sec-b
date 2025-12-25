function checkDegree() {
    var ssc = document.getElementById("ssc").checked;
    var hsc = document.getElementById("hsc").checked;
    var bsc = document.getElementById("bsc").checked;
    var error = document.getElementById("error");

    if (!ssc && !hsc && !bsc) {
        error.innerHTML = "Please select at least one degree.";
        return false;
    }

    error.innerHTML = "";
    return true;
}
