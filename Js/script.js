function showrregis () {
    document.getElementById("registeration").style.display = 'grid'
    document.getElementById("registeration").style.gridTemplateColumns = '50% 50%'
    document.getElementById("loginSection").style.display = 'none'
    
}

showrlogin = () => {
    document.getElementById("loginSection").style.display = 'grid'
    document.getElementById("loginSection").style.gridTemplateColumns = '50% 50%'
    document.getElementById("registeration").style.display = 'none'
}