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

/*function validate_login(event) {
    let loginForm = document.querySelector("#login");

    var button = document.getElementById("submit");
    var username1 = document.getElementById('username1');
    var password = document.getElementById('password1');

    if (/[A-Z]/.test(password.value)&(/[a-z]/.test(password.value))&
        (/[0-9]/.test(password.value))&(/^[A-Za-z0-9]*$/.test(password.value))&
        (password.value.length>=6 & password.value.length<=10)&(isNaN(username1.value[0]))&
        (/^[A-Za-z0-9]*$/.test(username1.value))&(username1.value.length>=6 & username1.value.length<=10))
        {
        alert("Signed In");
        redirect();
        //button.type = "submit"
    }
    else{
        alert("Invalid username or password");
    }

 }*/

//loginForm.submit.addEventListener("click", validate_login);
//let createForm = document.querySelector("#create");
createForm.Submit.addEventListener("click", validateForm);

 //let loginForm = document.querySelector("#login");


 /*
 let myForm = document.querySelector("#create");
 myForm.submit.addEventListener("click", validateForm);


 function dropShadow(event) {
     event.target.style.textDecoration = "underline";
 }
 
 function noShadow(event) {
     event.target.style.textDecoration = "none";
 }

 let navleft = document.getElementById("navleft");
 let navmiddle = document.getElementById("navmiddle");
 let navright = document.getElementById("navright");

 navleft.addEventListener("mouseover", dropShadow);
 navleft.addEventListener("mouseout", noShadow);
 navmiddle.addEventListener("mouseover", dropShadow);
 navmiddle.addEventListener("mouseout", noShadow);
 navright.addEventListener("mouseover", dropShadow);
 navright.addEventListener("mouseout", noShadow);
*/
