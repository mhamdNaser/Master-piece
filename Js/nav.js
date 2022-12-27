function showrregis () {
    document.getElementById("registeration").style.display = 'grid'
    document.getElementById("registeration").style.gridTemplateColumns = '50% 50%'
    document.getElementById("loginSection").style.display = 'none'
    document.getElementById("btn-regist").style.backgroundColor = 'rgba(230, 221, 196)'
    document.getElementById("btn-regist").style.color = '#181D31'
    document.getElementById("btn-login").style.backgroundColor = '#181D31'
    document.getElementById("btn-login").style.color = 'white'
    
}

showrlogin = () => {
    document.getElementById("loginSection").style.display = 'grid'
    document.getElementById("loginSection").style.gridTemplateColumns = '50% 50%'
    document.getElementById("registeration").style.display = 'none'
    document.getElementById("btn-login").style.backgroundColor = 'rgba(230, 221, 196)'
    document.getElementById("btn-login").style.color = '#181D31'
    document.getElementById("btn-regist").style.backgroundColor = '#181D31'
    document.getElementById("btn-regist").style.color = 'white'
}