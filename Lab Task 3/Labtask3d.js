function checkDOB() {
    var day = document.getElementById("day").value;
    var month = document.getElementById("month").value;
    var year = document.getElementById("year").value;
    var error = document.getElementById("error");

    if(day == "" || month == "" || year == ""){
        error.innerHTML = "Date fields cannot be empty";
        return false;
    }

    if(day < 1 || day > 31){
        error.innerHTML = "Day must be between 1 and 31";
        return false;
    }

    if(month < 1 || month > 12){
        error.innerHTML = "Month must be between 1 and 12";
        return false;
    }

    if(year < 1900 || year > 2024){
        error.innerHTML = "Year must be between 1900 and 2024";
        return false;
    }

    error.innerHTML = "";
    return true;
}
