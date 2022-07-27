function showpass() {
    var x = document.getElementById("password");

    if (x.type === "password") {
        x.type = "text";
    } else {
        x.type = "password";
    }
}
function loginpass() {
    var y = document.getElementById("pasw");
    if (y.type === "password") {
        y.type = "text";
    } else {
        y.type = "password";
    }

}



var passs = document.schooluser.pass;
function ValidatePasswords() {
    var passformat = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[a-zA-Z]).{8,}$/;
    if (passs.value.match(passformat)) {
         window.location.reload()
        return true;
    } else {
        alert("Password should be atleast 8 characters long, contain both aplhanumeric characters and special characters");
        passs.focus();
        return false;
    }
}

var modal = document.getElementById('popup');

window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}