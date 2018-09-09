$(document).ready(function(){
    $("footer").removeClass("fixed-footer");
});
function Validar(){
    var user = document.getElementById('username').value;
    var pass = document.getElementById('password').value;
    if (user == "admin" && pass == "0000") {
        location.href = "../Home/HomeView.php";
        console.log("Bin");
    }
    else {
        location.href = "LoginView.php";
    }
}