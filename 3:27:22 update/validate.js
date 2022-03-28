function validateForm(event) {
    let myForm = document.querySelector("#create");

    var username = document.getElementById('username')
    var password1 = document.getElementById('password')
    var password2 = document.getElementById('password2')


    if (/[A-Z]/.test(password1.value)&(/[a-z]/.test(password1.value))&
        (/[0-9]/.test(password1.value))&(/^[A-Za-z0-9]*$/.test(password1.value))&
        (password1.value.length>=6 & password1.value.length<=10)&
        (password1.value == password2.value)&(isNaN(username.value[0]))&
        (/^[A-Za-z0-9]*$/.test(username.value))&
        (username.value.length>=6 & username.value.length<=10))
        {
        alert("User validated")
    }
    else{
        alert("Invalid username or password")
    }


 
 }

 let myForm = document.querySelector("#create");
 myForm.submit.addEventListener("click", validateForm);