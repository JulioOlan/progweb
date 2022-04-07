function pregunata(id){
    Swal
    .fire({
        title: "Eliminar registro",
        text: "¿Eliminar?",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonText: "Sí, eliminar",
        cancelButtonText: "Cancelar",
    })
    .then(resultado => {
        if (resultado.value) {
            // Hicieron click en "Sí"
            eliminardatos(id);
            console.log("*Se elimino*");
        } else {
            // Dijeron que no
            console.log("*NO se elimina el registro*");
        }
    });
}

function eliminardatos(id){
    cadena="id="+id;
    $.ajax({
        type:"POST",
        url:"delete_exe.php",
        data:cadena,
        success:function(){
            location.reload();
        }
    });
}