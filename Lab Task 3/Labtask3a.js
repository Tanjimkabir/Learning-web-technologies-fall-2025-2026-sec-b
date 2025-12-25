function checkName() {
    var name = document.getElementById("name").value;
    var error = document.getElementById("error");

    if(name == ""){
        error.innerHTML = "Name cannot be empty";
        return false;
    }

    var first = name[0];
    if(!((first >= 'A' && first <= 'Z') || (first >= 'a' && first <= 'z'))){
        error.innerHTML = "Name must start with a letter";
        return false;
    }

    for(var i=0; i<name.length; i++){
        var c = name[i];
        if(!((c >= 'A' && c <= 'Z') || (c >= 'a' && c <= 'z') || c == '.' || c == '-' || c == ' ')){
            error.innerHTML = "Name can only have letters, dot or dash";
            return false;
        }
    }

    var parts = name.trim().split(" ");
    var count = 0;
    for(var i=0; i<parts.length; i++){
        if(parts[i] != ""){
            count++;
        }
    }

    if(count < 2){
        error.innerHTML = "Name must contain at least two words";
        return false;
    }
    
    error.innerHTML = "";
    return true;
}
