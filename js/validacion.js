const email = document.getElementById("mail")
const pass = document.getElementById("password")
const form = document.getElementById("form")

form.addEventListener("submit", e=>{
    e.preventDefault()
    let regexEmail = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,4})+$/


    if(!regexEmail.test(email.value)){
        alert (`El email no es valido`)
    }
    if(pass.value.length < 4){
        alert (`La contraseña no es valida`)
    }
})