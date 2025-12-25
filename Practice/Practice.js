function ValidateEmail(event){
    event.preventDefault();

var username = document.getElementById(uname).value
var password = document.getElementById(pword).value
var email = document.getElementById(email).value

alert("Username: " + uname + "\nPassword: " + pword + "\nEmail: " + email);
} 