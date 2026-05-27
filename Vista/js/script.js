function consultarPaciente() {
    const url = "index.php?accion=consultarpaciente&documento=" + $("#asignarDocumento").val();
    $("#paciente").load(url);
}
/*
$(document).ready(function () {
    $("#frmPaciente").dialog({
        autoOpen: false,
        height: 310,
        width: 400,
        modal: true,
        buttons: {
            "Insertar": insertarPaciente,
            "Cancelar": cancelar
        }
    });
});
*/

$(document).ready(function () {
    // 1. Esto nos dirá en la consola qué versión real está leyendo el navegador
    console.log("Versión actual de jQuery corriendo: " + $.fn.jquery);

    // 2. Esto revisa si la función 'dialog' existe en tu proyecto
    if (typeof $.fn.dialog === 'function') {
        console.log("¡Éxito! jQuery UI Dialog se cargó correctamente.");
        
        $("#frmPaciente").dialog({
            autoOpen: false,
            height: 310,
            width: 400,
            modal: true,
            buttons: {
                "Insertar": insertarPaciente,
                "Cancelar": cancelar
            }
        });
    } else {
        console.error("¡ALERTA! El archivo 'jquery-ui.js' NO se está cargando. Revisa la ruta.");
    }
});

function mostrarFormulario() {
    const documento = $("#asignarDocumento").val();
    $("#pacDocumento").val(documento);
    $("#frmPaciente").dialog('open');
}

function insertarPaciente(){
    $(this).dialog("close");
    queryString=$("#agregarPaciente").serialize();
    url = "index.php?accion=ingresarpaciente&"+queryString;
    $("#paciente").load(url);
}
function cancelar(){
    $(this).dialog("close");
}