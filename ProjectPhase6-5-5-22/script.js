//let loginForm = document.querySelector("#login");
let createForm = document.querySelector("#createForm");



function redirect () {
    location.href = "index.php";
}

function validateForm(event) {
    let createForm = document.querySelector("#create");

    var username = document.getElementById('username');
    var password1 = document.getElementById('password');
    var password2 = document.getElementById('password2');


    if (/[A-Z]/.test(password1.value)&(/[a-z]/.test(password1.value))&
        (/[0-9]/.test(password1.value))&
        (password1.value == password2.value)&
        (/^[A-Za-z0-9]*$/.test(username.value)))
        {
        document.getElementById("SubmitButton").type = "submit"
        alert("User validated");
    }
    else{
        alert("Invalid username or password");
    }
 }


createForm.Submit.addEventListener("click", validateForm);
