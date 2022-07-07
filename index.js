// Alerta de bienvenida.

//window.alert("Bienvenido/a a mi sitio web.");


// Modo Nocturno.

const btnSwitch = document.querySelector('#switch');

btnSwitch.addEventListener('click', ()=> {
    document.body.classList.toggle('dark');
    btnSwitch.classList.toggle('active');

    if(document.body.classList.contains('dark')){
        localStorage.setItem('dark-mode', 'true');
    }else{
        localStorage.setItem('dark-mode', 'false');
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