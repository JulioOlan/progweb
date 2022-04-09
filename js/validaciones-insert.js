const formulario = document.getElementById('formulario');
const inputs = document.querySelectorAll('#formulario input');
let boton = document.querySelector('#guardar');
boton.disabled = true;

const expresiones = {
	nombre: /^[a-zA-ZÀ-ÿ\s]{1,40}$/, // Letras y espacios, pueden llevar acentos.
	paterno: /^[a-zA-ZÀ-ÿ\s]{1,40}$/, // Letras y espacios, pueden llevar acentos.
	materno: /^[a-zA-ZÀ-ÿ\s]{1,40}$/, // Letras y espacios, pueden llevar acentos.
	correo: /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/,
    no_control: /^[0-9]{8}$/,
    telefono: /^[0-9]{10}$/,
}

const campos = {
    nombre: false,
    paterno: false,
    materno: false,
    correo: false,
    no_control: false,
    telefono: false,
}

const validarFormulario = (e) => {
    switch(e.target.name){  //En name tiene que ir el name del input
        case "nombre":
            validarCampo(expresiones.nombre, e.target, 'nombre');
        break;
        case "appat":
            validarCampo(expresiones.paterno, e.target, 'appat');
        break;
        case "apmat":
            validarCampo(expresiones.materno, e.target, 'apmat');
        break;
        case "mail":
            validarCampo(expresiones.correo, e.target, 'mail');
        break;
        case "no_control":
            validarCampo(expresiones.no_control, e.target, 'no_control');
        break;
        case "telefono":
            validarCampo(expresiones.telefono, e.target, 'telefono');
        break;
    }
}

const validarCampo = (expresion, input, campo) => {
    if(expresion.test(input.value)){
        document.getElementById(`grupo__${campo}`).classList.remove('formulario__grupo-incorrecto');
        document.getElementById(`grupo__${campo}`).classList.add('formulario__grupo-correcto');
        document.querySelector(`#grupo__${campo} i`).classList.add('fa-check-circle');
        document.querySelector(`#grupo__${campo} i`).classList.remove('fa-times-circle');
        document.querySelector(`#grupo__${campo} .formulario__error`).classList.remove('formulario__error-activo');
        campos[campo]  = true;
        boton.disabled = false;
    } else {
        document.getElementById(`grupo__${campo}`).classList.add('formulario__grupo-incorrecto');
        document.getElementById(`grupo__${campo}`).classList.remove('formulario__grupo-correcto');
        document.querySelector(`#grupo__${campo} i`).classList.add('fa-times-circle');
        document.querySelector(`#grupo__${campo} i`).classList.remove('fa-check-circle');
        document.querySelector(`#grupo__${campo} .formulario__error`).classList.add('formulario__error-activo');
        campos[campo]  = false;
        boton.disabled = true;
    }
    
}

inputs.forEach((input) => {
	input.addEventListener('keyup', validarFormulario);
	input.addEventListener('blur', validarFormulario);
});

$('#guardar').on('click', function (e) {
    e.preventDefault();

    if (campos.nombre && campos.appat && campos.apmat && campos.mail && campos.no_control && campos.telefono) {
        let params = $('form').serializeArray();

        document.getElementById('formulario__mensaje').classList.remove('formulario__mensaje-activo');

        document.querySelectorAll('.formulario__grupo-correcto').forEach((icono) => {
            icono.classList.remove('formulario__grupo-correcto');
        });
        $.ajax({
            url: 'insert_exe.php',
            type: 'POST',
            data: params,
            dataType: 'json',
        })
        formulario.reset();
        Swal.fire({
                icon: 'success',
                title: 'ÉXITO!',
                text: 'Datos registrados correctamente',
            })
    } else {
        document.getElementById('formulario__mensaje').classList.add('formulario__mensaje-activo');
    }

});
