function checkEmail() {
    var email = document.getElementById("email").value;
    var error = document.getElementById("error");

    if(email == ""){
        error.innerHTML = "Email cannot be empty";
        return false;
    }

    var at = email.indexOf("@");
    var dot = email.lastIndexOf(".");

    if(at < 1){
        error.innerHTML = "Email must have @ after some text";
        return false;
    }

    if(dot < at + 2){
        error.innerHTML = "Email must have a dot(.) after @";
        return false;
    }

    if(dot == email.length - 1){
        error.innerHTML = "Email cannot end with a dot(.)";
        return false;
    }

    error.innerHTML = "";
    return true;
}
