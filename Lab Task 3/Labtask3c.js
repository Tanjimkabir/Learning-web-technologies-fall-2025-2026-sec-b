function checkGender() {
    var male = document.getElementById("male").checked;
    var female = document.getElementById("female").checked;
    var other = document.getElementById("other").checked;
    var error = document.getElementById("error");

    if(male == false && female == false && other == false){
        error.innerHTML = "Please select your gender";
        return false;
    }

    error.innerHTML = "";
    return true;
}
