const btn = document.querySelector('#menu-btn');
const menu = document.querySelector('#sidemenu');
const head = document.querySelector('#Head');
const head2 = document.querySelector('#Head-2');
const inputs = document.querySelectorAll('.FAD .FAI');

document.addEventListener('keydown', (event) => {
    if (event.ctrlKey) {
       if (event.keyCode == 16) {
           //document.SAC.innerHTML = "<script class=.SAC src=js/app2.js></script>";
           //document.write("<script class='.SAC' src='js/app2.js'></script>");        
           //document.close();
           document.location.href = "index2.php"
           //location.reload();
       }else if (event.keyCode == 18) {
            document.location.href = "index.php"
       }
    }
}, false);

inputs.forEach(input => {
    input.onfocus = ( ) =>{
        input.previousElementSibling.classList.add('Top');
        input.previousElementSibling.classList.add('Focus');
        input.parentNode.classList.add('Focus');
    }
    input.onblur = ( ) =>{
        input.value = input.value.trim();
        if (input.value.trim().length==0) {
            input.previousElementSibling.classList.remove('Top');
        }
        input.previousElementSibling.classList.remove('Focus');
        input.parentNode.classList.remove('Focus');
    }  
});

function validar() {
    inputs.forEach(input => {
        campo = input.value.trim();
        if (campo.length != 0) {
            input.previousElementSibling.classList.add('Top');
        }
    });
}

function mayus(e) {
    e.value = e.value.toUpperCase();
}

document.addEventListener("keydown", e =>{

    if(e.key == "|" || e.key == "|") {
        menu.classList.toggle("menu-expanded");
        menu.classList.toggle("menu-collapsed");

        document.querySelector('body').classList.toggle("body-collapsed");
    }
});

btn.addEventListener('click', () => {
    menu.classList.toggle("menu-expanded");
    menu.classList.toggle("menu-collapsed");

    document.querySelector('body').classList.toggle("body-collapsed");
});
