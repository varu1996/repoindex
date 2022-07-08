// Chequea modo Claro/Oscuro
$(document).ready(function () {
    if (document.body.classList.contains('dark')) {
        let element = document.getElementById("nav");
        element.classList.remove("navbar-light");
        element.classList.add('navbar-dark');

    } else {
        let element = document.getElementById("nav");
        element.classList.remove("navbar-dark");
        element.classList.add('navbar-light');
    }
})

// Modo Nocturno.

const btnSwitch = document.querySelector('#switch');

btnSwitch.addEventListener('click', ()=> {
    document.body.classList.toggle('dark');
    btnSwitch.classList.toggle('active');

    if(document.body.classList.contains('dark')){
        localStorage.setItem('dark-mode', 'true');
        let element = document.getElementById("nav");
        element.classList.remove("navbar-light");
        element.classList.add('navbar-dark');

    }else{
        localStorage.setItem('dark-mode', 'false');
        let element = document.getElementById("nav");
        element.classList.remove("navbar-dark");
        element.classList.add('navbar-light');
        
    }
});

if(localStorage.getItem('dark-mode') === 'true'){
    document.body.classList.add('dark');
    btnSwitch.classList.add('active');
}else{
    document.body.classList.remove('dark');
    btnSwitch.classList.remove('active');
}


// Botón Creador.

let nombre = "Valentín";
let apellido = "Rusconi";
let edad = 25;

function datos(){
    alert("Me llamo " + nombre + " " + apellido + " y tengo " + edad + " años.");
}