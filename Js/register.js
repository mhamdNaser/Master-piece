let pattern = "^[a-zA-Z ]*$"
let regPass = "^(?=.*[0-9])(?=.*[a-z])(?=.*[A-Z])(?=.*[@$!%*?&])([a-zA-Z0-9@$!%*?&]{12,32}$)"
let regPass1 = "^(?=.*[0-9])(?=.*[a-z])([a-zA-Z0-9]{8,12})"
let regPass2 = "^(?=.*[a-z])([a-zA-Z0-9]{8})"
let fname = document.getElementById("fname")

let lname = document.getElementById("lname")
let pass = document.getElementById("password")
let repass = document.getElementById("conf-password")
let mail =  document.getElementById("email")


checkfname = () => {
    if (fname.value.match(pattern)){
        lname.removeAttribute('disabled')
        document.getElementById("fnerror").style.display = "none"
    }
    else{
        document.getElementById("fnerror").innerHTML = "Please Use Letters Only" 
        document.getElementById("fnerror").style.display = "block"
    }
}

checklname = () => {
    if (lname.value.match(pattern)){
        pass.removeAttribute('disabled')
        document.getElementById("lnerror").style.display = "none"
    }
    else{
        document.getElementById("lnerror").innerHTML = "Please Use Letters Only" 
        document.getElementById("lnerror").style.display = "block"
    }
}

checkpass = () => {
    if (pass.value.match(regPass)){
        repass.removeAttribute('disabled')
        document.getElementById("bestpass").style.display = "flex"
        document.getElementById("goodpass").style.display = "none"
        document.getElementById("smallpass").style.display = "none"
    }
    else if (pass.value.match(regPass1)){
        repass.removeAttribute('disabled')
        document.getElementById("goodpass").style.display = "flex"
        document.getElementById("bestpass").style.display = "none"
        document.getElementById("smallpass").style.display = "none"
    }
    else if (pass.value.match(regPass2)){
        document.getElementById("smallpass").style.display = "flex"
        document.getElementById("bestpass").style.display = "none"
        document.getElementById("goodpass").style.display = "none"
        document.getElementById("passerror").innerHTML = "Your Password Is Poor"
        document.getElementById("passerror").style.display = "block"
    }
}

recheckpass = () => {
    if (pass.value == repass.value && pass.value != "" ){
        document.getElementById("match").style.display = "flex"
        document.getElementById("notmatch").style.display = "none"
        mail.removeAttribute('disabled')
    }
    else{
        document.getElementById("notmatch").style.display = "flex"
        document.getElementById("match").style.display = "none"
    }
}
